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
    <link rel="stylesheet" title="text/css" href="<?= base_url('assets/css/stylesheet.css') ?>">

    <!--End::CSS-->
</head>

<body>
    <!--Begin::Site Compulsão de Hamburguer-->
    <!--Begin::Navbar-->
    <nav class="container-fluid">
        <div class="row align-items-center">
            <div class="col p-2">
                <!--Begin::Logo-->
                <a href="<?= site_url('/') ?>"><img class="logo" src="<?= base_url('assets/img/LogoCompulsao_hamburger.png') ?>" alt="Logo" /></a>
                <!--End::Logo-->
            </div>
            <div class="col p-3 pe-5 d-flex flex-row justify-content-end">
                <div><a class="nav-link ms-5" href="<?= site_url('/') ?>">Início</a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('products/index') ?>">Produtos</a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('About_the_Company') ?>">Sobre a Empresa</a></div>
                <div>
                </div>
    </nav>
    <!--End::Navbar-->
    <!--Begin::Content-->
    <section class="container-fluid section-1 py-5">
        <div class="row">
            <div class="col-5 text-center">
                <a href="#"><img class="restaurant" src="<?= base_url('assets/img/restaurant.jpg') ?>" alt="Hamburgueria"></a>
            </div>
            <div class="col-6">
                <p class="rest-sob mb-8"> Compulsão de Hamburguer Brasil</p>
                <p class="rest-sobt">
                    Avenida dos Prazeres, 789 – Esquina com Rua do Sabor, Bairro Gourmet, Teresina, PI – 64000-123, Brasil<br><br>
                    <strong>"Na esquina mais saborosa de Teresina, onde cada mordida é uma experiência inesquecível!"</strong>
                </p>
                <p class="product-p mb-3">Compulsão de Hamburguer: O sabor que você não consegue resistir!

                    Bem-vindo à Compulsão de Hamburguer, onde cada mordida é uma explosão de sabor e cada hambúrguer é uma obra de arte! Aqui, não se trata apenas de comer, mas de viver uma experiência gastronômica única, preparada com os ingredientes mais frescos e selecionados.

                    Nosso cardápio é uma verdadeira jornada para os amantes de hambúrgueres: desde os clássicos suculentos, até criações ousadas com combinações irresistíveis. Impossível resistir à crocância do bacon dourado, à suavidade dos queijos derretidos, e às carnes grelhadas no ponto perfeito.

                    Seja para os famintos de plantão ou para quem busca um momento de prazer com amigos e família, a Compulsão de Hamburguer é o lugar ideal. Aqui, cada detalhe conta: do pão brioche macio ao toque especial dos nossos molhos artesanais. Afinal, você merece o melhor, e é por isso que estamos aqui – para criar hambúrgueres dos quais você não vai conseguir fugir.

                    Venha saciar a sua compulsão por sabor e descubra porque somos a parada obrigatória para os apaixonados por hambúrguer!</p>
                    <div class="d-flex align-items-center mb-3">
                        <img src=<?= base_url ('assets/img/icon_phone.png')?> alt="Phonne" />
                        <p class="rest-sobt ms-3">
                            <a class="nav-link" href="tel:+34540954"> 86 3454-0954</a>
                        </p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <img src=<?= base_url ('assets/img/icon_email.png')?> alt="Email" />
                        <p class="rest-sobt ms-3">
                            <a class="nav-link" href="CompulsãoHamburguer@gmail.com">CompulsãoHamburguer@gmail.com</a>
                        </p>
                    </div>
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
                    <a href="#"><img class="logo-flooter" src="<?= base_url('assets/img/instagram.png') ?>" alt="Instagram"></a>
                </div>
                <div class="text-center mx-4">
                    <a href="#"><img class="logo-flooter" src="<?= base_url('assets/img/whatsapp.png') ?>" alt="Whatsapp"></a>
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