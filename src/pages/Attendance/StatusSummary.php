<?php

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Daftar Status Presensi Pegawai - SICAKEP"
        ]
    ],
    []
);

echo $templates->render('attendance/status', $data_template);
