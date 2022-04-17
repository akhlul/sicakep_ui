<?php

/**
 * Register Bootstrap
 */

require_once "./src/functions/database.php";
require_once "./src/functions/utilities.php";
require_once "./src/functions/render.php";
require_once "./src/functions/tinyrouter.php";

// Dev Only
$templates->registerFunction('debugbarRenderer', function ($str) {
    include "./src/functions/debugbar.php";
    if ($str == "renderHead") {
        return $debugbarRenderer->renderHead();
    }
    if ($str == "render") {
        return $debugbarRenderer->render();
    }
});

$status = session_status();

if ($status == PHP_SESSION_NONE) {
    session_start();
}