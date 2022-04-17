<?php

use \League\Plates\Engine;

$templates = new Engine('./src/templates', 'plates.php');
$templates->loadExtension(new League\Plates\Extension\URI($_SERVER['REQUEST_URI']));

$templates->addFolder('base', './src/templates/base');

$templates->registerFunction('assets', function ($str) {
    return "/assets/" . $str;
});
