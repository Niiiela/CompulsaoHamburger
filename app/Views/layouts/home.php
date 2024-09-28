<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Dani Vieira">
    <meta name="description" content="Uma representação do site Compulsão de Hamburguer desenvolvido em HTML, CSS">
    <title><?= $Title ?></title>
    <!--Begin::Bootstrap-->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">
    <!--End::Bootstrap-->
    <!--Begin::CSS-->
    <link rel="stylesheet" title="text/css" href="<?= base_url('assets/css/stylesheet.css') ?>">

    <!--End::CSS-->
</head>

<body>
    <!--Begin::Nav-->
    <?= $this->include('layouts/nav') ?>
    <!--End::Nav-->

    <!--Begin:content:-->
    <?= $this->renderSection('content') ?>
    <!--End::content-->

    <!--Begin::Nav-->
    <?= $this->include('layouts/footer') ?>
    <!--End::Footer-->

    <!--Begin::Javascript-->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>">
    <!--End::Javascript-->
</body>

</html>