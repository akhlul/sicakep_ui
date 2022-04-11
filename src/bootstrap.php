<?php

/**
 * Register Login Router
 */

require "./src/functions/database.php";
require "./src/functions/utilities.php";
require "./src/functions/render.php";

$status = session_status();

if ($status == PHP_SESSION_NONE) {
    session_start();
}

/**
 * Naive Router Logic
 */



require "./src/pages/" . $_GET['page'] . ".php";

