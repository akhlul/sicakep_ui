<?php

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Rekap Laporan Harian - SICAKEP"
        ]
    ],
    []
);

echo $templates->render('dailyreport/summary', $data_template);
