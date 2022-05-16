<?php

/**
 * show single laporan
 * 
 */

$dailyreport_sql = "SELECT id_laporan, id_pegawai, tanggal, uraian, volume, satuan_volume, 
				durasi, satuan_durasi, pemberi_tugas, status, satuan ,nama, waktu 
		FROM (
			SELECT * 
			FROM laporanwfh_2 wf 
			WHERE id_laporan = :id_laporan
		) a 
		LEFT JOIN satuan s 
			ON a.satuan_volume=s.id_satuan 
		LEFT JOIN pegawai pg 
			ON a.pemberi_tugas=pg.id 
		LEFT JOIN satwaktu sw 
			ON a.satuan_durasi=sw.id_satuan_waktu";
$stmt = $db->prepare($dailyreport_sql);
$stmt->execute([
    "id_laporan" => $route_match[1],
]);
$dailyreport = $stmt->fetch(PDO::FETCH_OBJ);
// dd($dailyreport);   

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

$data_template = array_merge(
    [
        'dailyreport' => $dailyreport,
        'satuan_kuantitas' => $satuan_kuantitas,
        'pemberi_tugas' => $pemberi_tugas
    ],
    []
);

// use htmx 
echo $templates->render('dailyreport/x-entry-edit', $data_template);