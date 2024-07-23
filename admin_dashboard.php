<?php include_once ("protect.php"); ?>
<?php include_once ("db/conexao.php"); ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <script src="https://kit.fontawesome.com/a733851df8.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <link href="css/styles.css" rel="stylesheet" />

    <title>Admin dashboard </title>
</head>

<body>

    <h1>Seja bem vindo
        <?= $_SESSION['nome'] ?>
    </h1>
    <p>Clique aqui para deslogar<a href="logout.php">logout </a></p>




    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastrarUsuario">
        Cadastrar Usuario
    </button>

    <!-- Cadastro Usuario -->
    <div class="modal fade" id="cadastrarUsuario" tabindex="-1" role="dialog" aria-labelledby="cadastrarUser"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label for="cadastrarUser">
                        <h5 class="modal-title" id="cadastrarUser">Criar novo usuario </h5>
                    </label>
                    <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="processa_cadastro.php" method="POST">
                        <div class="mb-3">
                            <label for="NomeUsuario" id="cadastrarUser" class="form-label">Insira Nome de Usuario
                                *</label>
                            <input type="text" class="form-control" id="NomeUsuario" placeholder="Nome"
                                name="nomeUsuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="EmailUsuario" class="form-label">Insira email de Usuario *</label>
                            <input type="email" class="form-control" id="EmailUsuario" placeholder="email@.com"
                                name="emailUsuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="SenhaUsuario" class="form-label">Insira senha de Usuario *</label>
                            <small> Minimo de 8 caracteres </small>
                            <input type="password" class="form-control" id="SenhaUsuario" placeholder=""
                                name="senhaUsuario" minlength="8" required>
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Cadastrar usuario" class="btn outline btn-success">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 
<--! Removendo usuarios -> -->
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#removerUsuario">
        Remover usuario </button>

    <!-- Modal -->
    <div class="modal fade" id="removerUsuario" tabindex="-1" role="dialog" aria-labelledby="removeUser"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label for="cadastrarUser">
                        <h5 class="modal-title" id="removeUser">Remover usuario </h5>
                    </label>
                    <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                $query = $conexao->query("SELECT * FROM usuarios ");
                ?>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#Id</th>
                                <th scope="col">Nome Usuario </th>
                                <th scope="col">email</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $query->fetch_assoc()): ?>

                                <tr>
                                    <th scope="row"><?= $row['id']; ?></th>
                                    <td><?= $row['nome']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td> <a href="actions/exclui_usuario.php?id=<?= $row['id'] ?>"> <i
                                                class="fa-solid fa-trash"></i></a></td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
                <?php $query->close(); ?>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Cadastrar especies  -->

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastrarEspecie">
        Cadastrar Especie
    </button>

    <!-- Cadastro Usuario -->
    <div class="modal fade" id="cadastrarEspecie" tabindex="-1" role="dialog" aria-labelledby="cadastrarEspecie"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label for="cadastrarEspecie">
                        <h5 class="modal-title" id="cadastrarEspecie">Cadastrar nova Especie </h5>
                    </label>
                    <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="actions/process.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3"><label for="NomeEntidade" class="form-label">Insira Nome Da Entidade
                                *</label><input type="text" class="form-control" id="NomeEntidade" placeholder="Nome"
                                name="NomeEntidade" required>
                        </div>
                        <div class="mb-3"><label for="NomeCientifico" class="form-label">Insira Nome
                                Cientifico</label><input type="text" class="form-control" id="NomeCientifico"
                                placeholder="Nome cientifico" name="NomeCientifico"><i
                                class="fa-solid fa-camera-retro"></i></div>
                        <p>Classificação da especie</p><small><strong>Escolha apenas uma opção</strong></small><br>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="fauna" name="Especies" value="Fauna"><label class="form-check-label"
                                for="fauna">Fauna</label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="flora" name="Especies" value="Flora"><label class="form-check-label"
                                for="flora">Flora</label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="fungo" name="Especies" value="Fungo"><label class="form-check-label"
                                for="fungo">Fungo</label></div>Ecossistema
                        <p>Habitate da
                            especie</p><small><strong>Escolha apenas uma opção</strong></small><br>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="mataAtlantica" name="Ecossistema" value="mataAtlantica"><label
                                class="form-check-label" for="mataAtlantica">Mata
                                Atlântica</label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="manguezal" name="Ecossistema" value="Manguezal"><label class="form-check-label"
                                for="manguezal">Manguezal</label>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="restinga" name="Ecossistema" value="Restinga"><label class="form-check-label"
                                for="restinga">Restinga</label>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="tassalociclo" name="Ecossistema" value="Tassalociclo"><label
                                class="form-check-label" for="tassalociclo">Tassalociclo</label></div>
                        <div class="mb-3"><label for="formFileMultiple" class="form-label">Insira uma
                                Imagem</label><small height="30px">Extensões permitidas: .jpeg,
                                .jpg</small><input class="form-control" type="file" id="formFileMultiple"
                                name="Imagens[]" required multiple></div>
                        <div class="mb-3"><input type="submit" value="Cadastrar especie "
                                class="btn outline btn-success"></div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#listarEspecie">
        Listar
    </button>

    <!-- Listar especies  -->
    <div class="modal fade" id="listarEspecie" tabindex="-1" role="dialog" aria-labelledby="listarEspecie"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label for="listarEspecie">
                        <h5 class="modal-title" id="listarEspecie"> Especies cadastradas </h5>
                    </label>
                    <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    $query = $conexao->query("SELECT * FROM especies ");
                    ?>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#Id</th>
                                    <th scope="col">Nome </th>
                                    <th scope="col">Especie</th>
                                    <th scope="col">Habitate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $query->fetch_assoc()): ?>

                                    <tr>
                                        <th scope="row"><?= $row['EspecieId']; ?></th>
                                        <td><?= $row['Nome']; ?></td>
                                        <td><?= $row['TipoEspecie']; ?></td>
                                        <td><?= $row['TipoHabitate']; ?></td>
                                        <td> <a href="actions/exclui_especie.php?EspecieId=<?= $row['EspecieId'] ?>"> <i
                                                    class="fa-solid fa-trash"></i></a></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php $query->close(); ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Alterando senha  -->

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#alterarSenha">
        Alterar senha
    </button>

    <!-- Editar senha -->
    <div class="modal fade" id="alterarSenha" tabindex="-1" role="dialog" aria-labelledby="alterarSenha"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label for="cadastrarUser">
                        <h5 class="modal-title" id="alterarSenha">Alterar senha do usuario </h5>
                    </label>
                    <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php $selectUsers = $conexao->query("SELECT * FROM usuarios "); ?>
                <div class="modal-body">
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#Id</th>
                                    <th scope="col">Nome Usuario </th>
                                    <th scope="col">email</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $selectUsers->fetch_assoc()): ?>

                                    <tr>
                                        <th scope="row"><?= $row['id']; ?></th>
                                        <td><?= $row['nome']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td> <a href="actions/edita_senha.php?id=<?= $row['id'] ?>"> <i
                                                    class="fa-solid fa-edit"></i></a></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php $selectUsers->close(); ?>

                    < </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">salvar alterações </button>
                        </div>
                </div>
            </div>
        </div>


        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">IFBA - Campus Ilhéus</h4>
                        <p class="lead mb-0">Rodovia Ilhéus-Itabuna,
                            km 13 <br />Ilhéus - BA,
                            45671-700 </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Conheça nosso Instituto</h4><a
                            class="btn btn-outline-light btn-social mx-1"
                            href="https://www.facebook.com/campusilheus/"><i class="fab fa-facebook-f"></i></a><a
                            class="btn btn-outline-light btn-social mx-1"
                            href="https://www.instagram.com/ifba_ilheus/"><i class="fab fa-instagram"></i></a><a
                            class="btn btn-outline-light btn-social mx-1"
                            href="https://www.youtube.com/channel/UCzX_d2QvYzA8AwhzJ8AF9-A"><i
                                class="fab fa-youtube"></i></a><a class="btn btn-outline-light btn-social mx-1"
                            href="https://portal.ifba.edu.br/ilheus"><i class="fas fa-globe"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Sobre o Projeto</h4>
                        <p class="lead mb-0" style="text-align: left; text-align: justify">O objetivo deste
                            projeto foi criar um álbum didático digital sobre Biomas do Sul da Bahia para dar
                            suporte ao ensino dos conteúdos ligados à área da Ecologia. Este álbum didático
                            digital contém imagens de paisagens anteriormente obtidas com as realizações de
                            visitas técnicas,
                            e que contemplem tanto ambientes,
                            como a fauna e flora encontradas. Este projeto pretende oferecer ao aluno certa
                            mobilidade de estudo,
                            na qual ele poderá acessar o álbum em qualquer lugar usando dispositivo com acesso à
                            internet,
                            além de auxiliar nos estudos da disciplina de Biologia. Proporcionando melhoria na
                            qualidade de ensino,
                            além de fornecer uma nova ferramenta para o processo de aprendizado,
                            motivando os alunos a adquirirem novos conhecimentos por meio da utilização do
                            ambiente virtual. </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Instituto Federal da Bahia - Campus Ilhéus - 2021</small></div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms JS * *-->
        <!-- * * Activate your form at https: //startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>