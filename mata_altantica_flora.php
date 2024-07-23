<?php include "templates/header.php"; ?>
<?php include "db/conexao.php"; ?>
<?php
$result = $conexao->query(
    "SELECT especies.Nome, especies_imagens.CaminhoImagem 
        FROM especies 
        JOIN especies_imagens ON especies.EspecieId = especies_imagens.EspecieId 
        WHERE especies.TipoHabitate = 'mataAtlantica' AND especies.TipoEspecie = 'Flora'"
);

?>

<style>
    .titulo {
        text-align: center;
        margin-top: 8px;
    }
</style>


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
        <?php include ("mocks/mata_atlantica/mata_atlantica_flora_mock.php"); ?>
        <div class="row justify-content-center">
            <?php foreach ($portfolioMataAtlanticaFlora as $item): ?>
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








            <!-- Portfolio Item 51-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal51">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta42-cristadegalo.jpg" alt="..." />
                    <h5 class="titulo">Crista de Galo</h5>
                </div>
            </div>
            <!-- Portfolio Item 52-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal52">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta41-Leiteira Família APOCYNACEAE (1).jpg"
                        alt="..." />
                    <h5 class="titulo">Leiteira</h5>
                </div>
            </div>
            <!-- Portfolio Item 53-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal53">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta40-botira Família GESNERIACEAE (1).jpg"
                        alt="..." />
                    <h5 class="titulo">Botira</h5>
                </div>
            </div>
            <!-- Portfolio Item 54-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal54">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta38-boa noite2.jpg" alt="..." />
                    <h5 class="titulo">Boa-noite rosa</h5>
                </div>
            </div>
            <!-- Portfolio Item 55-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal55">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta37-Vermelhão Megaskepasma erythroclamys Lindau (1).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Megaskepasma erythroclamys Lindau</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 56-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal56">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta36-sem nome Philodendron sp (2).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Philodendron sp.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 57-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal57">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta35-bambuzinho.jpg" alt="..." />
                    <h5 class="titulo">Bambuzinho</h5>
                </div>
            </div>
            <!-- Portfolio Item 58-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal58">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/planta34-canademacaco Costus spicatus (Jacq.) SW (1).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Costus spicatus (Jacq.) SW.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 59-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal59">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta33-chumbinho, cambará Lantana camara L (2).jpg" alt="..." />
                    <h5 class="titulo"><i>Lantana camara L.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 60-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal60">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta32-sombreiro Clitoria fairchildiana Howard (2).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Clitoria fairchildiana Howard</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 61-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal61">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta31-copodeleite Monstera deliciosa (2).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Monstera deliciosa</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 62-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal62">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta30-Orquídeacattleya Cattleya tigrina (1).jpg" alt="..." />
                    <h5 class="titulo"><i>Cattleya tigrina</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 63-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal63">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta29-bananeira ornamental Heliconia rostrata Ruiz e Pav (2).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Heliconia rostrata Ruiz e Pav.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 64-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal64">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta28-Orquídea.jpg" alt="..." />
                    <h5 class="titulo">Planta sem identificação</h5>
                </div>
            </div>
            <!-- Portfolio Item 65-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal65">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta26-Copo de leite família ARACEAE (2).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Anthurium sp.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 66-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal66">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta25-Lírio Hippeastrum sp (2).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Hippeastrum sp.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 67-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal67">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta24-Sorvetão Zingiber spectabile Griff (2).jpg" alt="..." />
                    <h5 class="titulo"><i>Zingiber spectabile Griff.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 68-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal68">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta23-bastão do imperador Etlingera elatior L (2).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Etlingera elatior L.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 69-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal69">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta22-Alpinia vermelha Alpinia purpurata K. Schum.jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Alpinia purpurata K. Schum</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 70-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal70">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta21-Cravo de defunto amarelo Tagetes erecta L (4).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Tagetes erecta L.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 71-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal71">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta21-Cravo de defunto amarelo Tagetes erecta L (3).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Etlingera sp.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 72-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal72">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta19-Água de elefante Etlingera elatior (Jack) R. Smith (2).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Etlingera elatior (Jack) R. Smith</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 73-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal73">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta18-Alpínia rosa Alpinia purpurata K. Schum (2).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Alpinia purpurata K. Schum</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 74-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal74">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta17-helicônia Heliconia psittacorum L (2).jpg" alt="..." />
                    <h5 class="titulo"><i>Heliconia sp.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 75-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal75">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta16-Estrelícia Heliconia sp. (4).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Heliconia psittacorum L.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 76-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal76">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta15-botão de alagoa Família ASTERACEAE (2).jpg" alt="..." />
                    <h5 class="titulo">Botão de Alagoa</h5>
                </div>
            </div>
            <!-- Portfolio Item 77-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal77">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta14-Lírio do brejo Hedychium coronarium Koch (2).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Hedychium coronarium Koch</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 78-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal78">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta13-Carrapicho de agulha Bidens pilosa L (1).jpg" alt="..." />
                    <h5 class="titulo"><i>Bidens pilosa L.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 79-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal79">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta12-Flor de Carrapicho Família ASTERACEAE (1).jpg" alt="..." />
                    <h5 class="titulo">Flor-de-Carrapicho</h5>
                </div>
            </div>
            <!-- Portfolio Item 80-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal80">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta11-Santa Bárbara Plectranthus grandis (Cramer) R.H. Willense  (2).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Plectranthus grandis (Cramer) R.H. Willense</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 81-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal81">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta10- malmequer Sphagneticola trilobata (L.jpg" alt="..." />
                    <h5 class="titulo"><i>Sphagneticola trilobata (L.) Pruski</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 82-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal82">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta09-transagem Plantago major L..jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Plantago major L.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 83-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal83">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta08-Azedinha Família MALVACEAE (2).jpg"
                        alt="..." />
                    <h5 class="titulo">Azedinha</h5>
                </div>
            </div>
            <!-- Portfolio Item 84-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal84">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta06-Espial Jatropha sp (1).jpg" alt="..." />
                    <h5 class="titulo"><i>Jatropha sp.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 85-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal85">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta05-Brinco de moça Clerodendron sp (1).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Clerodendron sp.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 86-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal86">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta04-Fudanga Família LAMIACEAE (1).jpg"
                        alt="..." />
                    <h5 class="titulo">Fudanga</h5>
                </div>
            </div>
            <!-- Portfolio Item 87-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal87">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta03-Tioba2.jpg" alt="..." />
                    <h5 class="titulo">Tioba</h5>
                </div>
            </div>
            <!-- Portfolio Item 88-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal88">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta02-Alamanda, dedal-de-dama Allamanda cathartica.jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Allamanda cathartica L.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 89-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal89">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Planta01-Flor de vela Hydrangea macrophylla (1).jpg" alt="..." />
                    <h5 class="titulo"><i>Hydrangea macrophylla Ser.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 90-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal90">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/planta, borboletário, porto seguro3.jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Hibiscus sp.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 91-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal91">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/macrófitas, borboletário, porto seguro.jpg"
                        alt="..." />
                    <h5 class="titulo">Macrófitas</h5>
                </div>
            </div>
            <!-- Portfolio Item 92-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal92">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Ixora vermelha Ixora coccinea, borboletário, porto seguro.jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Ixora coccinea</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 93-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal93">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/IMG_3838.jpg" alt="..." />
                    <h5 class="titulo"><i>Dietes iridioides</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 94-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal94">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/IMG_3837.jpg" alt="..." />
                    <h5 class="titulo"><i>Neomarica candida</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 95-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal95">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/IMG_3836.jpg" alt="..." />
                    <h5 class="titulo"><i>Theobroma grandiflorum</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 96-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal96">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/IMG_3819.jpg" alt="..." />
                    <h5 class="titulo"><i>Anacardium occidentale</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 97-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal97">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/IMG_3776.jpg" alt="..." />
                    <h5 class="titulo"><i>Bougainvillea sp.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 98-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal98">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/IMG_3753.jpg" alt="..." />
                    <h5 class="titulo"><i>Oncidium sharry baby</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 99-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal99">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Planta07-Cravo de defunto Tagetes sp (1).jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Tagetes sp.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 100-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal100">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/IMG_3728.jpg" alt="..." />
                    <h5 class="titulo"><i>Orquídea</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 101-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal101">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/IMG_3716.jpg" alt="..." />
                    <h5 class="titulo"><i>Citrus sp.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 102-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal102">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/IMG_3704.jpg" alt="..." />
                    <h5 class="titulo"><i>Neomarica longifolia</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 103-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal103">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/IMG_3692.jpg" alt="..." />
                    <h5 class="titulo"><i>Anacheilium bueraremense Campacci</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 104-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal104">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/IMG_3683.jpg" alt="..." />
                    <h5 class="titulo"><i>Tillandsia stricta L.</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 105-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal105">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/Helicônia, Borboletário, Porto seguro.jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Heliconia psittacorum</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 106-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal106">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/DSC03983.jpg" alt="..." />
                    <h5 class="titulo">Planta epífita</h5>
                </div>
            </div>
            <!-- Portfolio Item 107-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal107">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Dracena vermelha (Cordyline terminalis), borboletário, Porto Seguro.jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Cordyline terminalis</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 108-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal108">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Bastão do imperador, borboletário, Porto Seguro.jpg" alt="..." />
                    <h5 class="titulo"><i>Etlingera elatior</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 109-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal109">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid"
                        src="imagens/Mata Atlântica/Anthurium andraeanum, antúrio, borboletário Porto Seguro.jpg"
                        alt="..." />
                    <h5 class="titulo"><i>Anthurium andraeanum</i></h5>
                </div>
            </div>
            <!-- Portfolio Item 110-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal110">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="imagens/Mata Atlântica/231020 (5).jpg" alt="..." />
                    <h5 class="titulo"><i>Crotalaria sp.</i></h5>
                </div>
            </div>

        </div>
    </div>

    <div class="row justify-content-center">
        <?php while ($row = $result->fetch_assoc()): ?>
            <?php var_dump($row); // Depuração: Verificar os dados retornados ?>
            <?php var_dump($row['CaminhoImagem']) ?>

            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i>
                        </div>

                    </div>


                    <img class="img-fluid" src="/arquivos/<?= $row['CaminhoImagem'] ?>"
                        alt="Imagem da espécie <?= htmlspecialchars($row['Nome']) ?>">
                    <h5 class="titulo"><?= htmlspecialchars($row['Nome']) ?></h5>
                </div>
            </div>

        <?php endwhile; ?>
    </div>

</section>


<?php include './mata_atlantica_flora_modal.php' ?>



<?php include "templates/footer.php"; ?>