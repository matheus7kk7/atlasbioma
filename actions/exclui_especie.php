<?php include '../db/conexao.php'; ?>

<?php


if (isset($_GET['EspecieId'])) {
    $id = $_GET['EspecieId'];
    $queryDel = $conexao->prepare("DELETE FROM especies WHERE EspecieId = ? ");
    $queryDel->bind_param("i", $id);

    if ($queryDel->execute()) {

        header("Location:../admin_dashboard.php");
        exit;
    }

    $queryDel->close();
}
?>