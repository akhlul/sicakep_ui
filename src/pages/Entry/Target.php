<?php

// $app_session->getSet('target-id', $app_session->get('id'));

use Moment\Moment;

$mom = new Moment();
$mom->setMonth($app_session->get('target-bulan'));
$mom->setYear($app_session->get('target-tahun'));
$mom->setYear($app_session->get('target-tahun'));

/**
 * Get Daftar Pegawai
 */
$pegawai_sql = "SELECT id, nama FROM `pegawai` where id = :id_pegawai";
$stmt = $db->prepare($pegawai_sql);
$stmt_param = [
    "id_pegawai" => $app_session->getSet('target-id-pegawai', $app_session->get('id'))
];

if ($app_session->get('level_user') == 5 || $app_session->get('level_user') == 3) {
    // jika level pegawai supervisor/administrator provinsi
    $pegawai_sql = "SELECT id, nama
                    FROM pegawai p, jabatan j, jabatan_pegawai jp
                    WHERE p.id = jp.id_pegawai
                        AND j.id_jabatan = jp.id_jabatan
                        AND jp.wilker = :wilker
                        AND eselon >= :eselon
                    ORDER BY wilker, nama ";
    $stmt = $db->prepare($pegawai_sql);
    $stmt_param = [
        "wilker" => $app_session->get('wilker'),
        "eselon" => $app_session->get('eselon')
    ];
} else if ($app_session->get('level_user') == 4 || $app_session->get('level_user') == 2) {
    // jika level pegawai supervisor/administrator provinsi
    $pegawai_sql = "SELECT id, nama
                    FROM pegawai p, jabatan j, jabatan_pegawai jp
                    WHERE p.id = jp.id_pegawai
                        AND j.id_jabatan = jp.id_jabatan
                        AND jp.wilker = :wilker
                        AND eselon >= :eselon
                    ORDER BY wilker, nama ";
    $stmt = $db->prepare($pegawai_sql);
    $stmt_param = [
        "wilker" => $app_session->get('wilker'),
        "eselon" => $app_session->get('eselon')
    ];
}

$stmt->execute($stmt_param);
$pegawai_list = $stmt->fetchAll(PDO::FETCH_OBJ);
// dd($pegawai_list);

/**
 * Satuan Volume
 */
$satuan_volume_sql = " SELECT m.id_keg, m.id_satuan, s.satuan
                FROM masterkegiatan m, satuan s, satwaktu w
                WHERE m.id_satuan = s.id_satuan
                    AND m.id_satuan_waktu = w.id_satuan_waktu
                    AND approved = 1
                    AND LEVEL = 4
                ORDER BY uraian ";
$satuan_volume_list = $db->query($satuan_volume_sql)->fetchAll(PDO::FETCH_OBJ);
// dd($satuan_volume_list);

/**
 * Satuan Waktu
 */
$satuan_waktu_sql = "SELECT m.id_keg, m.id_satuan_waktu, w.waktu
                    FROM masterkegiatan m, satuan s, satwaktu w
                    WHERE m.id_satuan = s.id_satuan
                        AND m.id_satuan_waktu = w.id_satuan_waktu
                        AND approved = 1
                        AND LEVEL = 4
                    ORDER BY uraian";
$satuan_waktu_list = $db->query($satuan_waktu_sql)->fetchAll(PDO::FETCH_OBJ);


/**
 * Dateline : Batas pengisian
 */
$dateline_sql = "SELECT dateline_penugasan
                FROM setting_dateline
                WHERE bulan = :bulan
                    AND satker = :wilker ";
$stmt = $db->prepare($dateline_sql);
$stmt->execute([
    "bulan" => $app_session->getSet("target-bulan", "01"),
    "wilker" => $app_session->get('wilker')
]);
$dateline_list = $stmt->fetchAll(PDO::FETCH_OBJ);


/**
 * Nama Pekerjaan
 */
if ($app_session->get('bidang') > 0 && $app_session->get('bidang') <= 6) {
    $nama_pekerjaan_sql = "SELECT * 
                            FROM masterkegiatan 
                            WHERE level = 4 
                                AND approved = 1 
                                AND kode_seksi = :bidang 
                            order by uraian";
    $stmt = $db->prepare($nama_pekerjaan_sql);
    $stmt->execute([
        "bidang" => $app_session->get('bidang')
    ]);
    $nama_pekerjaan_list = $stmt->fetchAll(PDO::FETCH_OBJ);
} else {
    $nama_pekerjaan_sql = " SELECT *
                            FROM masterkegiatan
                            WHERE LEVEL = 4
                                AND approved = 1
                            ORDER BY uraian ";
    $nama_pekerjaan_list = $db->query()->fetchAll(PDO::FETCH_OBJ);
}


/**
 * Penugasan
 */
$penugasan_sql = "SELECT * 
        FROM (
            SELECT id_penugasan as id_penugasan, tahun, bulan, 
                    id_pegawai, kode_seksi, id_keg, target, satuan,
                    targetwaktu, satuanwaktu, penugasan_by, nama, uraian 
            FROM pegawai p,
                (
                    SELECT id_penugasan, tahun, bulan, id_pegawai, 
                            a.kode_seksi,a.id_keg,target,satuan,a.targetwaktu,
                            satuanwaktu, penugasan_by, uraian
                    FROM penugasan a, masterkegiatan m, pegawai p 
                    WHERE p.id = a.id_pegawai and 
                            a.id_keg = m.id_keg and 
                            id_pegawai= :id_pegawai and 
                            bulan= :bulan and 
                            tahun= :tahun
                ) s 
            WHERE p.id=s.penugasan_by 
        ) x
        LEFT JOIN (
            SELECT id_penugasan as id_penugasan_y, nilai 
            FROM `laporanpekerjaan_new`
        ) y
        ON x.id_penugasan=y.id_penugasan_y";
$stmt = $db->prepare($penugasan_sql);
$stmt->execute([
    "id_pegawai" => $app_session->getSet('target-id-pegawai', $app_session->get('id')),
    "bulan" => BULAN_PAIR[$app_session->getSet("target-bulan", 1)][0],
    "tahun" => $app_session->getSet('target-tahun', "2022")
]);
$penugasan_list = $stmt->fetchAll(PDO::FETCH_OBJ);
// dd($penugasan_list);

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Entri Target/ Penugasan - SICAKEP",
            'session' => $app_session
        ],
        'session' => $app_session,
        'pegawai_list' => $pegawai_list,
        'satuan_volume_list' => $satuan_volume_list,
        'satuan_waktu_list' => $satuan_waktu_list,
        'dateline_list' => $dateline_list,
        'nama_pekerjaan_list' => $nama_pekerjaan_list,
        'penugasan_list' => $penugasan_list
    ],
    []
);

echo $templates->render('entry/targetcollection', $data_template);