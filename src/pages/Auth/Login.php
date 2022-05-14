<?php

if ($app_session->get("username")) {
    redirect('/home');
}

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
   [
        'head' => [
            'head_title' => "Masuk - SICAKEP"
        ],

        'session' => $app_session
    ],
    []
);

echo $templates->render('account/login', $data_template);