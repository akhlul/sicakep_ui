<?php

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Daftar Master Pekerjaan - SICAKEP"
        ]
    ],
    []
);

echo $templates->render('master/work/collection', $data_template);
