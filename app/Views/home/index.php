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
    <link rel="stylesheet" title="text/css"  href="<?= base_url('assets/css/stylesheet.css')?>">

    <!--End::CSS-->
</head>
<body>
    <!--Begin::Site Compulsão de Hamburguer-->
    <!--Begin::Navbar-->
    <nav class="container-fluid">
        <div class="row align-items-center">
            <div class="col p-2">
                <!--Begin::Logo-->
                <a href="<?= site_url('/')?>"><img class="logo" src="<?= base_url('assets/img/LogoCompulsao_hamburger.png') ?>" alt="Logo" /></a>
                <!--End::Logo-->
            </div>
            <div class="col p-3 pe-5 d-flex flex-row justify-content-end">
                <div><a class="nav-link ms-5" href="<?= site_url('Start') ?>">Início</a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('Products') ?>">Produtos</a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('About_the_Company') ?>">Sobre a Empresa</a></div>
            <div>
        </div>
    </nav>
    <!--End::Navbar-->
    <!--Begin::Content-->
    <section class="container-fluid section-1">
        <div class="row">
            <div class="col text-center p-5">
                <div class="mb-5">
                    <img class="img-fluid" src="<?= base_url('assets/img/Hamburger.gif')?>" alt="Hamburger" />
                </div>
            </div>
            <div class="col text-center p-5">
                <img class="img-fluid-1" src="<?= base_url('assets/img/PostPromoção.png')?>" alt="Post Promoção" />
            </div>
            <div class="text-center p-6">
                    <h3 class="mb-2">Deliciosos Hambúrger</h3>
                    <a class="btn-products" href="<? base_url('Products') ?>">Produtos</a>
                </div>
        </div>        
    </section>
    <!--End::Content-->
    <!--Begin::footer-->
    <footer class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-6 d-flex flex-row justify-content-center">
                <div class="text-center mx-4">
                    <a href="#"><img class="logo-flooter" src="<?= base_url('assets/img/facebook.png') ?>" alt="Facebook"></a>
                </div>
                <div class="text-center mx-4">
                    <a href="#"><img class="logo-flooter" src="<?= base_url('assets/img/instagram.png')?>" alt="Instagram"></a>
                </div>
                <div class="text-center mx-4">
                    <a href="#"><img class="logo-flooter" src="<?= base_url('assets/img/whatsapp.png')?>" alt="Whatsapp"></a>
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