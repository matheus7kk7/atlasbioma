<?php include 'templates/header.php'; ?>

<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Biomas</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-6 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/mata.png" alt="..." />
                </div>
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-6 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/manguezal.png" alt="..." />
                </div>
            </div>


            <!-- Portfolio Item 3-->
            <div class="col-md-6 col-lg-6 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/restinga.png" alt="..." />
                </div>
            </div>

            <!-- Portfolio Item 4-->
            <div class="col-md-6 col-lg-6 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/talassociclo.png" alt="..." />
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'assets/modals/portfolio_modal1.php'; ?>
<?php include 'assets/modals/portfolio_modal2.php'; ?>
<?php include 'assets/modals/portfolio_modal3.php'; ?>
<?php include 'assets/modals/portfolio_modal4.php'; ?>
<?php include 'templates/footer.php'; ?>