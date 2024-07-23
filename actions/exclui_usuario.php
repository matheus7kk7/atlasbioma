<?php include '../db/conexao.php'; ?>
<?php if (!$_SESSION) {
    session_start();
    session_destroy();
} ?>
<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $queryDel = $conexao->prepare("DELETE FROM usuarios WHERE id = ? ");
    $queryDel->bind_param("i", $id);

    if ($queryDel->execute()) {

        header("Location:../admin_dashboard.php");
        exit;
    }

    $queryDel->close();
}
?>