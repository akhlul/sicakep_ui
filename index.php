<?php

declare(strict_types=1);

include_once __DIR__ . '/vendor/autoload.php';

error_reporting(E_ALL);

/**
 * Register the error handler
 */
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

/**
 * Initiate Session
 */
session_start();
date_default_timezone_set('Asia/Jakarta');
$today = date("YmdHis");

/**
 * Register the routes
 */
include "./src/routes.php";
