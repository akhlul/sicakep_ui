<?php

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Daftar Status Presensi Pegawai - SICAKEP",
            'session' => $app_session
        ],
        'session' => $app_session
    ],
    []
);

echo $templates->render('attendance/status', $data_template);
