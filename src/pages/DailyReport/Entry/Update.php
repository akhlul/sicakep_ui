<?php

// dd($_POST);

// save edited laporan
$prepared_sql = "UPDATE laporanwfh_2 
			SET durasi = ?,
				satuan_durasi = ?,
				volume = ?,
		    	satuan_volume = ?,
				pemberi_tugas = ?,
				uraian = ?
			WHERE id_laporan = ?";
$stmt = $db->prepare($prepared_sql);
$stmt->execute([
    $_POST['entry-durasi'],
    $_POST['entry-satuan-durasi'],
    $_POST['entry-volume'],
    $_POST['entry-satuan-volume'],
    $_POST['entry-pemberi-tugas'],
    $_POST['entry-uraian-pekerjaan'],
    $route_match[1],
]);

if($stmt) {
    $app_session->setFlash('message', "Berhasil memperbaharui penugasan ID:" . $route_match[1]);
    redirect($app_session->get('request_uri'));
} else {
    $app_session->setFlash('message', "Gagal memperbaharui penugasan ID:" . $route_match[1]);
    redirect($app_session->get('request_uri'));
}
