<?= $this->extend('layouts/home')?>

<?= $this->section('content') ?>
    <!--Begin::Content-->
    <section class="container p-5">
        <!--Begin::Hambúrger Duplo Bacon-->
        <div class="row product">
            <div class="col text-center p-5">
                <div class="mb-5">
                    <img class="img-fluid" src="<?= base_url('assets/img/menu/DuploBacon.png') ?>" alt="Hambúrger Duplo Bacon" />
                </div>
            </div>
            <div class="col text-center p-5">
                <h1 class="mb-3 text-center product-hamburguer product-hamburguer-text">Hambúrger Duplo Bacon</h1>
                <h5 class="mb-3 text-center product-hamburguer">Perfeição em cada mordida</h5>
                <p class="mb-3 product-p">Dois suculentos hambúrgueres grelhados, acompanhados de bacon crocante e dourado, cobertos com queijo cheddar derretido que envolve tudo em uma textura cremosa. Enquanto a maionese artesanal e o pão brioche levemente tostado completam essa explosão de sabores. Um hambúrguer que une o melhor da carne, do bacon e dos temperos, criando uma experiência gastronômica irresistível.</p>
                <h2 class="mb-2 product-hamburguer">R$ 23,00</h2>
            </div>
        </div>
        <!-- End:: Hambúrger Duplo Bacon -->
        <!--Begin::Hambúrger Duplo Salada-->
        <div class="row product">
            <div class="col text-center p-5">
                <div class="col text-center p-5">
                    <h1 class="mb-3 text-center product-hamburguer product-hamburguer-text">Hambúrger Duplo Salada</h1>  
                    <h5 class="mb-3 text-center product-hamburguer">Perfeição em cada mordida</h5>
                    <p class="mb-3 product-p">Dois suculentos hambúrgueres grelhados, acompanhados de bacon crocante e dourado, cobertos com queijo cheddar derretido que envolve tudo em uma textura cremosa. Vegetais frescos como alface crocante e tomate maduro trazem equilíbrio e frescor, enquanto a maionese artesanal e o pão brioche levemente tostado completam essa explosão de sabores. Um hambúrguer que une o melhor da carne, do bacon e dos temperos, criando uma experiência gastronômica irresistível.</p>
                    <h2 class="mb-2 product-hamburguer">R$ 25,00</h2>
                </div>
            </div>
            <div class="col text-center p-5">
                <div class="mb-5">
                <img class="img-fluid" src="<?= base_url('assets/img/menu/Duplosalada.png') ?>" alt="Hambúrger Duplo Salada" />
                </div>
            </div>
        </div>
        <!--End::Hambúrger Duplo Salada-->
        <!--Begin::Hambúrger Simples Bacon-->
        <div class="row product">
            <div class="col text-center p-5">
                <div class="mb-5">
                    <img class="img-fluid" src="<?= base_url('assets/img/menu/SimpleBacon.png') ?>" alt="Hambúrger Duplo Bacon" />
                </div>
            </div>
            <div class="col text-center p-5">
                <h1 class="mb-3 text-center product-hamburguer product-hamburguer-text">Hambúrguer Simples Bacon</h1>
                <h5 class="mb-3 text-center product-hamburguer">Sabor clássico, direto ao ponto</h5>
                <p class="mb-3 product-p">Um suculento hambúrguer de carne bovina grelhada, combinado com bacon crocante e defumado, e queijo cheddar derretido, tudo em um pão macio e levemente tostado. Simples, mas com um sabor irresistível que nunca decepciona.</p>
                <h2 class="mb-2 product-hamburguer">R$ 15,00</h2>
            </div>
        </div>
        <!-- End:: Hambúrger Simple Bacon -->
         <!--Begin::Hambúrger Duplo Salada-->
        <div class="row product">
            <div class="col text-center p-5">
                <div class="col text-center p-5">
                    <h1 class="mb-3 text-center product-hamburguer product-hamburguer-text">Hambúrguer Triplo</h1>  
                    <h5 class="mb-3 text-center product-hamburguer">Uma torre de sabor</h5>
                    <p class="mb-3 product-p">Três hambúrgueres suculentos de carne bovina grelhada, intercalados com queijo cheddar derretido e bacon crocante. Alface fresca e tomate complementam, tudo dentro de um pão brioche macio. Uma experiência robusta e irresistível para quem quer muito sabor.</p>
                    <h2 class="mb-2 product-hamburguer">R$ 30,00</h2>
                </div>
            </div>
            <div class="col text-center p-5">
                <div class="mb-5">
                <img class="img-fluid" src="<?= base_url('assets/img/menu/burger-1.png') ?>" alt="Hambúrger Duplo Salada" />
                </div>
            </div>
        </div>
        <!--End::Hambúrger Duplo Salada-->
        <!-- End Hambúrger principal -->
    </section>
    <!--End::Content-->
    <?= $this->endSection() ?>