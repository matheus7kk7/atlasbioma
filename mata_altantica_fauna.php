<?php include "templates/header.php"; ?>

<?php include "db/conexao.php"; ?>
<?php
$result = $conexao->query(
    "SELECT especies.Nome, especies_imagens.CaminhoImagem 
        FROM especies 
        JOIN especies_imagens ON especies.EspecieId = especies_imagens.EspecieId 
        WHERE especies.TipoHabitate = 'mataAtlantica' AND especies.TipoEspecie = 'Fauna'"
);

?>
<style>
    .titulo {
        text-align: center;
        margin-top: 8px;
    }

    .tituloS {
        margin-top: 60px;
    }
</style>

<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 tituloS">Fauna</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay"
            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/326700897&color=%235ba734&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
        <div
            style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;margin-bottom:30px;">
            <a href="https://soundcloud.com/sonsdanaturezaofficial" title="Sons da Natureza" target="_blank"
                style="color: #cccccc; text-decoration: none;">Sons da Natureza</a> · <a
                href="https://soundcloud.com/sonsdanaturezaofficial/sons-da-natureza" title="Sons da Natureza"
                target="_blank" style="color: #cccccc; text-decoration: none;">Sons da Natureza</a>
        </div>

        <?php include "mocks/mata_atlantica/mata_atlantica_fauna_mock.php"; ?>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <?php foreach ($portfolioMataAtlanticaFauna as $item): ?>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#<?= $item['modal'] ?>">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= $item['img'] ?>" alt="..." />
                        <h5 class="titulo"><?= $item['title'] ?></h5>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="row justify-content-center">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <?php var_dump($row); // Depuração: Verificar os dados retornados ?>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i
                                        class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <!-- Use apenas o caminho relativo -->
                            <img class="img-fluid" src="<?= htmlspecialchars($row['CaminhoImagem']) ?>"
                                alt="Imagem da espécie <?= htmlspecialchars($row['Nome']) ?>" />
                            <h5 class="titulo"><?= htmlspecialchars($row['Nome']) ?></h5>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>


            <?php include 'mata_atlantica_fauna_modal.php' ?>

            <?php include "templates/footer.php"; ?>