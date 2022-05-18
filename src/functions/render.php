<?php

use \League\Plates\Engine;
use Moment\Moment;


$templates = new Engine('./src/templates', 'plates.php');

$templates->loadExtension(new League\Plates\Extension\URI(BASE_URL));
// $engine->loadExtension(new League\Plates\Extension\URI($_SERVER['PATH_INFO']));

$templates->addFolder('base', './src/templates/base');


/**
 * $this->assets("css/tabler.min.css") => /assets/css/tabler.min.css
 */
$templates->registerFunction('assets', function ($str) {
    return "/assets/" . $str;
});

/**
 * $this->compare("A", "A", "Berhasil", "Gagal) => Berhasil
 * $this->compare("A", "B", "Berhasil", "Gagal) => Gagal
 */
$templates->registerFunction('compare', function ($str1, $str2, $ifmatch, $ifnotmatch = "") {
    if($str1 == $str2) {
        return $ifmatch;
    } else {
        return $ifnotmatch;
    }
});

/**
 * $this->moment('2022-01-01', 'l, j F Y) => Sabtu, 1 Januari 2022
 */
$templates->registerFunction('moment', function ($str, $format = "l, j F Y") {
    Moment::setLocale('id_ID');
    $mom = new Moment($str, 'ASIA/JAKARTA');
    return $mom->format($format);
});