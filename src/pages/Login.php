<?php

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
// $data_template = array_merge(
//     [
//         'daftar_nama' => $daftar_nama,
//         'setting' => $setting,
//         'daftar_satuan' => $daftar_satuan,
//         'daftar_satuan_waktu' => $daftar_satuan_waktu,
//         'daftar_nama_pekerjaan' => $daftar_nama_pekerjaan,
//         'daftar_penugasan' => $daftar_penugasan,
//     ],
//     $data_template_root
// );

$data_template = [];

echo $templates->render('account/login', $data_template);