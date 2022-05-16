<?php

/**
 * show single delete
 * 
 */

$data_template = array_merge(
    [
        'id_laporan' => $route_match[1]
    ],
    []
);

// use htmx 
echo $templates->render('dailyreport/x-entry-delete', $data_template);