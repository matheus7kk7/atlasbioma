<?php include ("db/conexao.php"); ?>
<?php if (!isset($_SESSION)) {
    session_start();
} ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['emailUsuarioLogin']) && isset($_POST['senhaUsuarioLogin'])) {
        $emailUsuarioLogin = $conexao->real_escape_string($_POST['emailUsuarioLogin']);
        $senhaUsuarioLogin = $_POST['senhaUsuarioLogin'];
        if (!empty($emailUsuarioLogin) && !empty($senhaUsuarioLogin)) {

            $query = $conexao->prepare("SELECT * FROM usuarios WHERE email = ? ");
            $query->bind_param("s", $emailUsuarioLogin);
            $query->execute();
            $result = $query->get_result();
            $quantidade = $result->num_rows;
            if ($quantidade == 1) {
                $usuario = $result->fetch_assoc();
                if (password_verify($senhaUsuarioLogin, $usuario['senha']) && $emailUsuarioLogin == $usuario['email']) {
                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['nome'];
                    $query->close();
                    header("Location:admin_dashboard.php");
                    exit;

                }
            }

        }

    }
} ?>