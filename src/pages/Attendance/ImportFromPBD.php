<?php

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Import Presensi Dari PBD - SICAKEP"
        ]
    ],
    []
);

echo $templates->render('attendance/import', $data_template);
