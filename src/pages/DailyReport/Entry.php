<?php

/**
 * show index table
 * 
 */

$dailyreport_sql = "SELECT id_laporan, id_pegawai, tanggal, uraian, volume, satuan_volume, 
				durasi, satuan_durasi, pemberi_tugas, status, s.satuan, nama, sw.waktu 
		FROM (
			SELECT * 
			FROM laporanwfh_2 wf 
			WHERE id_pegawai = :id_pegawai AND 
					tanggal= :tanggal
		) a 
		LEFT JOIN satuan s 
			ON a.satuan_volume=s.id_satuan 
		LEFT JOIN pegawai pg 
			ON a.pemberi_tugas=pg.id 
		LEFT JOIN satwaktu sw 
			ON a.satuan_durasi=sw.id_satuan_waktu";
$stmt = $db->prepare($dailyreport_sql);
$stmt->execute([
    // "id_pegawai" => '340058566',
    // "tanggal" => '2022-02-02'
    "id_pegawai" => $app_session->getSet('entri-id-pegawai'),
    "tanggal" => $app_session->getSet('entri-tanggal-keg')
]);
$dailyreport_list = $stmt->fetchAll(PDO::FETCH_OBJ);

$satuan_kuantitas_sql = "SELECT * from satuan order by satuan asc";
$satuan_kuantitas = $db->query($satuan_kuantitas_sql)->fetchAll(PDO::FETCH_OBJ);

// $satuan_waktu_sql = "";
// $satuan_waktu = $db->prepare($satuan_waktu_sql)
//     ->execute()
//     ->fetchAll(PDO::FETCH_OBJ);

$pemberi_tugas_sql = "SELECT *
    FROM pegawai p, jabatan j, jabatan_pegawai jp
    WHERE p.id = jp.id_pegawai
        AND j.id_jabatan = jp.id_jabatan
        AND jp.wilker = :wilker
        AND eselon <= 4
    ORDER BY eselon, bidang, nama";
$pemberi_tugas = prepare_and_run($db, 
    $pemberi_tugas_sql,
    [
        "wilker" => $app_session->get('wilker')
    ],
    PDO::FETCH_OBJ
);


// if ($res = $mysqli->query($sql)) {
//     while ($obj = $res->fetch_object()) {
//         echo "<option value='" . $obj->id_satuan . "'>" . $obj->satuan . "</option>";
//     }
// }


$app_session->set('request_uri', $_SERVER['REQUEST_URI']);

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Daftar Master Pekerjaan - SICAKEP",
            'session' => $app_session
        ],
        'session' => $app_session,
        'dailyreport_list' => $dailyreport_list,
        'satuan_kuantitas' => $satuan_kuantitas,
        'pemberi_tugas' => $pemberi_tugas
    ],
    []
);

echo $templates->render('dailyreport/entry', $data_template);