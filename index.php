<?php

declare(strict_types=1);

include_once __DIR__ . '/vendor/autoload.php';

/**
 * Reading environment configurations
 */
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

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
// require_once "./src/functions/session.php";
// date_default_timezone_set('Asia/Jakarta');
// $today = date("YmdHis");
// session_start();


/**
 * Register the routes
 */
include "./src/routes.php";