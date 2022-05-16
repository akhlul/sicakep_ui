<?php

date_default_timezone_set('Asia/Jakarta');

// save edited laporan
$prepared_sql = "INSERT INTO laporanwfh_2 
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

// dd (PdoDebugger::show($prepared_sql, [
//     $app_session->get('id'),
//     $app_session->getSet('entri-tanggal-keg'),
//     str_replace(PHP_EOL, "<br>", $_POST['entry-uraian-pekerjaan']),
//     $_POST['entry-volume'],
//     $_POST['entry-satuan-volume'],
//     $_POST['entry-durasi'],
//     $_POST['entry-satuan-durasi'],
//     $_POST['entry-pemberi-tugas'],
//     Date("Y-m-d H:i:s"),
// ]));


$stmt = $db->prepare($prepared_sql);
$stmt->execute([
    null,
    $app_session->get('id'),
    $app_session->getSet('entri-tanggal-keg'),
    str_replace(PHP_EOL, "<br>", $_POST['entry-uraian-pekerjaan']),
    $_POST['entry-volume'],
    $_POST['entry-satuan-volume'],
    $_POST['entry-durasi'],
    $_POST['entry-satuan-durasi'],
    $_POST['entry-pemberi-tugas'],
    null,
    Date("Y-m-d H:i:s"),
    null
]);

if ($stmt) {
    $app_session->setFlash('message', "Berhasil menambah penugasan ID");
    redirect($app_session->get('request_uri'));
} else {
    $app_session->setFlash('message', "Gagal meanmbah penugasan ID");
    redirect($app_session->get('request_uri'));
}