<?php

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Daftar Master Pekerjaan (Admin) - SICAKEP",
            'session' => $app_session
        ],
        'session' => $app_session
    ],
    []
);

echo $templates->render('master/work/advanced', $data_template);
