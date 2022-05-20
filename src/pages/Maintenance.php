<?php

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Website is on Maintenance - SICAKEP",
            'session' => $app_session
        ],
        'session' => $app_session

    ],
    []
);

echo $templates->render('maintenance', $data_template);