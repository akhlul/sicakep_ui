<?php

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Daftar Master Pegawai - SICAKEP"
        ]
    ],
    []
);

echo $templates->render('master/employee/collection', $data_template);
