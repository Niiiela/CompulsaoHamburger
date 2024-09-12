<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Dani Vieira">
    <meta name="description" content="Uma representação do site Compulsão de Hamburguer desenvolvido em HTML, CSS">
    <title>Compulsão de Hamburguer</title>
    <!--Begin::Bootstrap-->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">
    <!--End::Bootstrap-->
    <!--Begin::CSS-->
    <link rel="stylesheet"   href="<?= base_url('assets/css/app.css')?>">
    <!--End::CSS-->
</head>
<body>
    <!--Begin::Site Compulsão de Hamburguer-->
    <!--Begin::Navbar-->
    <nav class="container-fluid">
        <div class="row align-items-center">
            <div class="col p-2">
                <!--Begin::Logo-->
                <a href="<?= site_url('/')?>"><img class="logo" src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" /></a>
                <!--End::Logo-->
            </div>
            <div class="col p-3 pe-5 d-flex flex-row justify-content-end">
                <div><a class="nav-link ms-5" href="<?= site_url('/') ?>">Início</a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('/') ?>">Produtos</a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('/') ?>">Sobre a Empresa</a></div>
            <div>
        </div>
    </nav>
    <!--End::Navbar-->
    <!--Begin::Content-->
    <section class="container-fluid bg-color-02">
        <div class="row">
            <div class="col text-center p-5">
                <div class="mb-5">
                    <img class="img-fluid" src="<?= base_url('assets/images/Hamburger.png') ?>" alt="O melhor Hambúrger!" />
                </div>
                <div class="text-center">
                    <h3 class="mb-5">Deliciosos e com grandes descontos!</h3>
                    <a class="btn-products" href="<?= site_url('products') ?>">Produtos</a>
                </div>
            </div>
            <div class="col text-center p-5">
                    <img class="img-fluid" src="<?= base_url('assets/images/main_burger_02.png') ?>" alt="Hambúrger com desconto" />
                </div>
        </div>
    </section>
    <!--End::Content-->
    <!--Begin::footer-->
    <footer class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-6 d-flex flex-row justify-content-center">
                <div class="text-center mx-4">
                    <a href="#"><img class="logo-flooter" src="<?= base_url('assets/images/facebook.png')?>" alt="Facebook"></a>
                </div>
                <div class="text-center mx-4">
                    <a href="#"><img class="logo-flooter" src="<?= base_url('assets/images/instagram.png')?>" alt="Instagram"></a>
                </div>
                <div class="text-center mx-4">
                    <a href="#"><img class="logo-flooter" src="<?= base_url('assets/images/whatsapp.png')?>" alt="Whatsapp"></a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col text-center">
                <h6>Todos os direitos reservados &copy; <?= date('Y') ?></h6>
            </div>
        </div>
    </footer>
    <!--End::footer-->
    <!--End::Site Compulsão de Hamburguer-->
    <!--Begin::Javascript-->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>">
    <!--End::Javascript-->
</body>
</html>