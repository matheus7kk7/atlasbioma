<?php include_once ("../protect.php"); ?>
<?php include_once ("../db/conexao.php"); ?>
<?php if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['novaSenhaUsuario']) && !empty($_POST['novaSenhaUsuario'])) {
            $novaSenhaUsuario = password_hash($_POST['novaSenhaUsuario'], PASSWORD_DEFAULT);
            $queryEdita = $conexao->prepare("UPDATE usuarios SET senha = ? WHERE id = ?");
            $queryEdita->bind_param("si", $novaSenhaUsuario, $id);
            $queryEdita->execute();
            $queryEdita->close();

        }
    }
}
?>


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

    <link href="../css/styles.css" rel="stylesheet" />

    <title>Edita senha </title>
</head>

<body>

    <h1> Editar senha </h1>



    <form action="" method="POST">
        <div class="mb-3">
            <label for="SenhaUsuario" class="form-label">Insira nova senha de Usuario *</label>
            <small> Minimo de 8 caracteres </small>
            <input type="password" class="form-control" id="SenhaUsuario" placeholder="" name="novaSenhaUsuario"
                minlength="8" required>
        </div>
        <div class="mb-3">
            <input type="submit" value="Enviar" class="btn outline btn-success">
        </div>
    </form>



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
                        class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/campusilheus/"><i
                            class="fab fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1"
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

<!--  -->