<?php

use \League\Plates\Engine;

$templates = new Engine('./src/templates', 'plates.php');

$templates->addFolder('base', './src/templates/base');

// echo $templates->render('home', ['name' => 'Jonathan']);
