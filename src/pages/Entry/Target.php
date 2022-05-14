<?php

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Entri Target/ Penugasan - SICAKEP"
        ]
    ],
    []
);

echo $templates->render('entry/targetcollection', $data_template);
