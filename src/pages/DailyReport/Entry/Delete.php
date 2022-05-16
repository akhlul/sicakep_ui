<?php

date_default_timezone_set('Asia/Jakarta');

// save edited laporan
$prepared_sql = "DELETE FROM laporanwfh_2 WHERE id_laporan=?";
$stmt = $db->prepare($prepared_sql);
$stmt->execute([
    $route_match[1]
]);

if ($stmt) {
    $app_session->setFlash('message', "Berhasil menghapus penugasan ID:" . $route_match[1]);
    redirect($app_session->get('request_uri'));
} else {
    $app_session->setFlash('message', "Gagal menghapus penugasan ID:" . $route_match[1]);
    redirect($app_session->get('request_uri'));
}