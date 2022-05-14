<?php

use \League\Plates\Engine;

$templates = new Engine('./src/templates', 'plates.php');

$templates->loadExtension(new League\Plates\Extension\URI($_SERVER['PATH_INFO']));

// $engine->loadExtension(new League\Plates\Extension\URI($_SERVER['PATH_INFO']));

$templates->addFolder('base', './src/templates/base');

$templates->registerFunction('assets', function ($str) {
    return "/assets/" . $str;
});
