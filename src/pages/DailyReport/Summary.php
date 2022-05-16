<?php

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Rekap Laporan Harian - SICAKEP",
            'session' => $app_session
        ],
        'session' => $app_session
    ],
    []
);

echo $templates->render('dailyreport/summary', $data_template);
