<?php

require_once "./src/functions/tinyrouter.php";

$GLOBALS['ROUTER_PAGE_PATH'] = __DIR__ . "/pages";

route('GET', '/home', "page#Home");

route('GET', '/login/:all', "group#", function ($r) {
    route('GET', '/login', "page#Login");
    // route('GET', '/login/:any/edit', "page#Edit");
    echo 'not found';
});

route('GET', '/dailyreport/:all', "group#", function ($r) {
    route('GET', '/dailyreport/entry', "page#DailyReport#Entry");
    route('GET', '/dailyreport/collection', "page#DailyReport#Collection");
    route('GET', '/dailyreport/summary', "page#DailyReport#Summary");
});

// // When no match is found it will fall down here
// header("HTTP/1.0 404 Not Found");
// die('Error 404 - No route could be found');