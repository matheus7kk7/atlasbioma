<?php include_once ("db/conexao.php"); ?>

<?php include_once ("templates/header.php");//Incluindo header da página     ?>

<?php
if ($_GET['EspecieId']) {
    $id = $_GET['EspecieId'];

    $result = $conexao->prepare("DELETE FROM especies WHERE EspecieId = ?");
    $result->bind_param("i", $id);
    $result->execute();
    $result->close();

    header("location:index.php");
    exit;
}
?>
<?php include_once ("templates/footer.php");//Incluindo header da página     ?>