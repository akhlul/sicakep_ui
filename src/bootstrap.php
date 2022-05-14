<?php

/**
 * Register Bootstrap
 */

require_once "./src/functions/database.php";
require_once "./src/functions/tinyrouter.php";
require_once "./src/functions/render.php";
require_once "./src/functions/session.php";
require_once "./src/functions/utilities.php";

/**
 * Defaults Configurations
 */

date_default_timezone_set('Asia/Jakarta');


/**
 * Dev: Register DebugBar
 * 
 */
$templates->registerFunction('debugbarRenderer', function ($str) {
    include "./src/functions/debugbar.php";
    if ($str == "renderHead") {
        return $debugbarRenderer->renderHead();
    }
    if ($str == "render") {
        return $debugbarRenderer->render();
    }
});
