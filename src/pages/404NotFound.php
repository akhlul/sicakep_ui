<?php

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "404 Not Found - SICAKEP",
            'session' => $app_session
        ],
        'session' => $app_session

    ],
    []
);

header("HTTP/1.0 404 Not Found");
echo $templates->render('404', $data_template);