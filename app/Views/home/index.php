<?= $this->extend('layouts/home')?>

<?= $this->section('content') ?>
<!--Begin::Site Compulsão de Hamburguer-->
<!--Begin::Content-->
<section class="container-fluid section-1">
    <div class="row">
        <div class="col text-center p-5">
            <div class="mb-5">
                <img class="img-fluid" src="<?= base_url('assets/img/Post_Promoção.png') ?>" alt="Post Promoção" />
            </div>
        </div>
        <div class="col text-center p-5">
            <img class="img-fluid" src="<?= base_url('assets/img/menu/hamburger.png') ?>" alt="Hambúrger" />
        </div>
        <div class="text-center p-5">
            <h3 class="mb-3 ">Deliciosos Hambúrger</h3>
            <a class="btn-products" href="<? base_url('products/index') ?>">Produtos</a>
        </div>
    </div>
</section>
<!--End::Content-->
<!--End::Site Compulsão de Hamburguer-->
<?= $this->endSection() ?>