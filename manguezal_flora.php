<?php include ("templates/header.php"); ?>

<style>
    .titulo {
        text-align: center;
        margin-top: 8px;
    }
</style>
?>

<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Flora</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Manguezal/Caraíva.jpg" alt="..." />
                    <h5 class="titulo">Caraíva, Porto Seguro</h5>
                </div>
            </div>


        </div>
    </div>
</section>



<?php include './manguezal_flora_modal.php' ?>


<?php include ("templates/footer.php"); ?>