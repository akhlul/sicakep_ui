<?php
/**
 * API must only return json objects
 */


/**
 * http://127.0.0.1:7777/api/chart?type=getJumlahPegawaiPerKako
 */
function getJumlahPegawaiPerKako(PDO $db)
{
    $prepared_sql = 'SELECT 
                         wilker, SUBSTRING(p.nip,15,1) as jk, count(status) as jumlah
                    FROM pegawai p, jabatan j, jabatan_pegawai jp 
                    WHERE p.id=jp.id_pegawai and j.id_jabatan=jp.id_jabatan
                    GROUP BY jk, wilker
                    ORDER BY jk, wilker';
    $stmt = $db->prepare($prepared_sql);
    $stmt->execute([]);
    $result = $stmt->fetchAll();

    $result_cols = [
        "labels" => [],
        "laki" => [],
        "perempuan" => [],
        "total_laki" => 0,
        "total_perempuan" => 0,
    ];

    foreach ($result as $key => $obj) {
        $obj = (object) $obj;
        if ($obj->jk == '1') {
            $result_cols['labels'][] = $obj->wilker;
            $result_cols['laki'][] = $obj->jumlah;  
			$result_cols['total_laki'] += $obj->jumlah;
		} else if ($obj->jk == '2') {
			$result_cols['perempuan'][] = $obj->jumlah;
			$result_cols['total_perempuan'] += $obj->jumlah;
		}
    }

    header('Content-type: application/json');
    echo json_encode(
        [
            "status" => "success",
            "data" => $result_cols,
            "message" => "Chart is found"
        ]
    );
}

/**
 * http://127.0.0.1:7777/api/chart?type=getJumlahPekerjaanPerKako&tahun=2022&bulan=01
 */
function getJumlahPekerjaanPerKako(PDO $db)
{
    if (!isset($_GET['bulan']) && !isset($_GET['tahun']) ) {
        header('Content-type: application/json');
        echo json_encode(
            [
                "status" => "failed",
                "data" => [],
                "message" => "paramaeter 'bulan' and 'tahun' is not found"
            ]
        );
        die();
    }

    $prepared_sql = "SELECT kode_wilayah, nama_wilayah, tahun, bulan, jml_pekerjaan, jml_realisasi, jml_dl, jml_pegawai
                    FROM (
                        SELECT *
                        FROM `m_wilayah`
                        WHERE sub_kode_wilayah = 0
                            AND kode_wilayah != '1813'
                        ) m
                    LEFT JOIN (
                        SELECT tahun, bulan, wilker, COUNT(wilker) AS jml_pekerjaan, COUNT(lapnew) AS jml_realisasi
                        FROM (
                            SELECT id_penugasan, p.tahun, p.bulan, jp.wilker
                            FROM penugasan p, pegawai pg, jabatan_pegawai jp
                            WHERE p.id_pegawai = pg.id
                                AND jp.id_pegawai = pg.id
                                AND bulan = :bulan
                                AND tahun = :tahun
                            ) mm
                        LEFT JOIN (
                            SELECT id_lapnew, id_penugasan, '1' AS lapnew
                            FROM laporanpekerjaan_new
                            ) LN
                            ON mm.id_penugasan = LN.id_penugasan
                        GROUP BY tahun, bulan, wilker
                        ) x
                        ON x.wilker = m.kode_wilayah
                    LEFT JOIN (
                        SELECT jp.wilker, thn, bln, COUNT(wilker) AS jml_dl
                        FROM pegawai pg, jabatan_pegawai jp, dinas_luar dl
                        WHERE pg.id = dl.id
                            AND pg.id = jp.id_pegawai
                            AND bln = :bulan2
                            AND thn = :tahun2
                        GROUP BY thn, bln, wilker
                        ) vv
                        ON vv.wilker = m.kode_wilayah
                    LEFT JOIN (
                        SELECT wilker, COUNT(wilker) AS jml_pegawai
                        FROM `pegawai` p, jabatan_pegawai jp
                        WHERE jp.id_pegawai = p.id
                        GROUP BY wilker
                        ) y
                        ON m.kode_wilayah = y.wilker;";
    $stmt = $db->prepare($prepared_sql);
    $stmt->execute([
        "bulan" => $_GET['bulan'],
        "tahun" => $_GET['tahun'],
        "bulan2" => $_GET['bulan'],
        "tahun2" => $_GET['tahun']
    ]);
    $result = $stmt->fetchAll();

    $result_cols = [
        "labels" => [],
        "pekerjaan_per_peg" => [],
        "realisasi_per_peg" => [],
        "dl_per_peg" => [],
    ];

    foreach ($result as $key => $obj) {
        $obj = (object) $obj;

        $result_cols['labels'][] = (string) $obj->kode_wilayah;
        $result_cols['pekerjaan_per_peg'][] = round(($obj->jml_pekerjaan / $obj->jml_pegawai), 2);
        $result_cols['realisasi_per_peg'][] = round(($obj->jml_realisasi / $obj->jml_pegawai), 2);
        $result_cols['dl_per_peg'][] = round(($obj->jml_dl / $obj->jml_pegawai), 2);
    }

    header('Content-type: application/json');
    echo json_encode(
        [
            "status" => "success",
            "data" => $result_cols,
            "message" => "Chart is found"
        ]
    );
}

// list of callable charts
$functionList = [
    "getJumlahPegawaiPerKako",
    "getJumlahPekerjaanPerKako",
    "getHello",
];

// if not set ?type=...
if (!isset($_GET['type'])) {
    header('Content-type: application/json');
    echo json_encode(
        [
            "status" => "failed",
            "data" => null,
            "message" => "Chart type is not specified yet"
        ]
    );
    die();
}

// assign type
$chartType = $_GET['type'];

// match type with the callbacks
if (in_array($chartType, $functionList)) {
    // type is not callable yet
    if (!is_callable($chartType)) {
        header('Content-type: application/json');
        echo json_encode(
            [
                "status" => "failed",
                "data" => null,
                "message" => "Chart type is not callable yet."
            ]
        );
        die();
    }

    // call the chart function
    call_user_func($chartType, $db);
    die();
} else {
    // type not found in functionlist
    header('Content-type: application/json');
    echo json_encode(
        [
            "status" => "failed",
            "data" => null,
            "message" => "Chart type not found"
        ]
    );
    die();
}