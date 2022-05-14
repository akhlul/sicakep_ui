<?php

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Entri Penilaian - SICAKEP"
        ]
    ],
    []
);

echo $templates->render('entry/grade', $data_template);
