<?php

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Entri Target Kolektif - SICAKEP",
            'session' => $app_session
        ],
        'session' => $app_session
    ],
    []
);

echo $templates->render('entry/collective/targetscollection', $data_template);
