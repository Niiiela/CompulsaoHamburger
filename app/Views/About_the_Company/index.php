<?= $this->extend('layouts/home')?>

<?= $this->section('content') ?>
    <!--Begin::Content-->
    <section class="container section-1 py-5">
        <div class="row">
            <div class="col-5 text-center">
                <a href="#"><img class="restaurant" src="<?= base_url('assets/img/room.webp') ?>" alt="Hamburgueria"></a>
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
    <br>
    <!--End::Content-->
    <!--Begin::Map-->
    <section class="container section-1 py-5">
        <div class="row">
            <div class="col text-center">
                <img src="<?= base_url('assets/img/map.jpg')?>" alt="" />
            </div>
        </div>
    </section>
    <!--End::Map-->
    <?= $this->endSection() ?>