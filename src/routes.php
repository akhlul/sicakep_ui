<?php

$GLOBALS['ROUTER_PAGE_PATH'] = "./src/pages";

route('GET', '/home', "page#login");

route('GET', '/login/:all', "group#", function ($r) {
    route('GET', '/login/me', "page#Login");
});

route('GET', '/entry/:all', "group", function ($r) {
    route('GET', '/entry/me', "page#entry");
});

// When no match is found it will fall down here
// header("HTTP/1.0 404 Not Found");
// die('Error 404 - No route could be found');