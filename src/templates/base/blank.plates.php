<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $head_title ?></title>
    <?= $this->debugbarRenderer("renderHead") ?>

    <link rel="stylesheet" href="<?= $this->assets('css/tabler.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->assets('iconfont/tabler-icons.min.css') ?>">
    <style>
    body {
        background-image: url('https://infoasn.id/wp-content/uploads/2021/10/background.webp');
    }
    </style>
</head>

<body class="">

    <?= $this->section('content') ?>

    <?= $this->debugbarRenderer("render") ?>

    <script type=module src="<?= $this->assets('js/tabler.esm.js') ?>"></script>
</body>

</html>