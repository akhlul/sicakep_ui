<?php

/**
 * Register Login Router
 */

require "./dev6/functions/db.php";
require "./dev6/functions/func.php";
require "./dev6/functions/render.php";

/**
 * Naive Router Logic
 */
require "./src/pages/" . $_GET['page'] . ".php";

