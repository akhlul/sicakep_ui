<?php

if (!$app_session->get("username")) {
    redirect('/login');
}

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
    [
        'head' => [
            'head_title' => "Beranda - SICAKEP",
            'session' => $app_session
        ],
        'session' => $app_session

    ],
    []
);

echo $templates->render('home', $data_template);