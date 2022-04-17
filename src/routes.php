<?php

require_once "./src/functions/tinyrouter.php";

$GLOBALS['ROUTER_PAGE_PATH'] = __DIR__ . "/pages";

// route('GET', '/home', "page#Home");

route('GET', '/login', "group#", function ($r) {
    route('GET', '/login', "page#Login");
    // route('GET', '/login/:any/edit', "page#Edit");
    echo 'not found';
});

// route('GET', '/entry/:all', "group#", function ($r) {
//     route('GET', '/entry/me', "page#entry");
// });

// When no match is found it will fall down here
// header("HTTP/1.0 404 Not Found");
// die('Error 404 - No route could be found');