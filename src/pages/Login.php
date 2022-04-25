<?php

/**
 * Merging Data
 *
 * root put in the last so we can override when needed
 */
$data_template = array_merge(
   [
        'head' => [
            'head_title' => "Masuk - SICAKEP"
        ]
    ],
    []
);

echo $templates->render('account/login', $data_template);