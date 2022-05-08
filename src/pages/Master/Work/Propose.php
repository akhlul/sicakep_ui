<?php

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Daftar Usulan Master Pekerjaan - SICAKEP"
        ]
    ],
    []
);

echo $templates->render('master/work/proposed', $data_template);
