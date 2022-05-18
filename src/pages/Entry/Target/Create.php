<?php

date_default_timezone_set('Asia/Jakarta');

dd($_POST);


$app_session->getSet('target-tahun', "2022");
$app_session->getSet('target-bulan', "01");
$app_session->getSet('target-id-pegawai', $app_session->get('id'));

/**
 * Tambah Entri Penugasan
 */
$target_seksi = '';

if ($_POST['target-seksi'] == '0') {
    $target_seksi = $app_session->get('bidang');
} else if ($_POST['target-seksi'] > 0) {
    $target_seksi = $_POST['target-seksi'];
}

$prepared_sql = "INSERT into penugasan
        values( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";

dd (PdoDebugger::show($prepared_sql, [
    null,
    $app_session->getSet('target-tahun', "2022"),
    $app_session->getSet('target-bulan', "01"),
    $app_session->getSet('target-id-pegawai', $app_session->get('id')),
    $target_seksi,
    $_POST['target-id-kegiatan'],
    $_POST['target-volume'],
    $_POST['target-satuan-volume'],
    $_POST['target-waktu'],
    $_POST['target-satuan-waktu'],
    $_SESSION['id'],
    date("Y-m-d H:i:s")
]));

$stmt = $db->prepare($prepared_sql);
$stmt->execute([
    null,
    $app_session->getSet('target-tahun', "2022"),
    $app_session->getSet('target-bulan', "01"),
    $app_session->getSet('target-id-pegawai', $app_session->get('id')),
    $seksi,
    $_POST['target-id-kegiatan'],
    $_POST['target-volume'],
    $_POST['target-satuan-volume'],
    $_POST['target-waktu'],
    $_POST['target-satuan-waktu'],
    $_SESSION['id'],
    date("Y-m-d H:i:s")
]);


if ($stmt) {
    $app_session->setFlash('message', "Berhasil menambah penugasan ID");
    redirect($app_session->get('request_uri'));
} else {
    $app_session->setFlash('message', "Gagal menambah penugasan ID");
    redirect($app_session->get('request_uri'));
}