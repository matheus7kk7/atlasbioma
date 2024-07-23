<?php include ("db/conexao.php"); ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['nomeUsuario']) && isset($_POST['emailUsuario']) && isset($_POST['senhaUsuario'])) {
        $nomeUsuario = $_POST['nomeUsuario'];
        $emailUsuario = $_POST['emailUsuario'];
        $senhaUsuario = password_hash($_POST['senhaUsuario'], PASSWORD_DEFAULT);
        if (!empty($nomeUsuario) && !empty($emailUsuario) && !empty($senhaUsuario)) {

            $query = $conexao->prepare("INSERT INTO usuarios (nome,email,senha)VALUES ( ? , ? , ? ) ");
            $query->bind_param("sss", $nomeUsuario, $emailUsuario, $senhaUsuario);
            $query->execute();
            $query->close();
            header("Location:admin_dashboard.php");
            exit;
        }

    }
} ?>