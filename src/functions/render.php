<?php

use \League\Plates\Engine;
use Moment\Moment;


$templates = new Engine('./src/templates', 'plates.php');

$templates->loadExtension(new League\Plates\Extension\URI(BASE_URL));
// $engine->loadExtension(new League\Plates\Extension\URI($_SERVER['PATH_INFO']));

$templates->addFolder('base', './src/templates/base');

$templates->registerFunction('assets', function ($str) {
    return "/assets/" . $str;
});

$templates->registerFunction('compare', function ($str1, $str2, $ifmatch, $ifnotmatch = "") {
    if($str1 == $str2) {
        return $ifmatch;
    } else {
        return $ifnotmatch;
    }
});




$templates->registerFunction('moment', function ($str) {
    Moment::setLocale('id_ID');
    $mom = new Moment($str, 'ASIA/JAKARTA');
    return $mom->format("l, j F Y");
});