<?php include_once ("templates/header.php");
echo "<title> edit </title> ";
//Incluindo conexão ao bd ?>

<?php include_once ("db/conexao.php");//Incluindo conexão ao bd ?>

<?php

if (isset($_GET['EspecieId'])) {
    $id = $_GET['EspecieId'];
    $result = $conexao->prepare("SELECT Nome , NomeCientifico ,TipoEspecie ,TipoHabitate FROM especies WHERE EspecieId = ?");
    $result->bind_param("i", $id);
    $result->execute();
    $result->bind_result($nome, $nomeCientifico, $tipoEspecie, $tipoHabitate);
    $result->fetch();
    $result->close();


}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['NomeEntidade']) && isset($_POST['NomeCientifico']) && isset($_POST['Especies']) && isset($_POST['TipoHabitate'])) {

        $nome = $_POST['NomeEntidade'];
        $nomeCientifico = $_POST['NomeCientifico'];
        $tipoHabitate = $_POST['TipoHabitate'];
        $result = $conexao->prepare("UPDATE especies set Nome = ? ,NomeCientifico = ? ,TipoEspecie =? ,TipoHabitate = ? WHERE EspecieId = ?");
        $result->bind_param("ssssi", $nome, $nomeCientifico, $tipoEspecie, $tipoHabitate, $id);
        $result->execute() ;
        $result->close();


    }

}


?>



<form action="" method="POST" enctype="multipart/form-data">
    <!-- enctype="multipart/form-data" Prepara o formulário para tratar de arquivos via POST-->
    <div class="mb-3">
        <label for="NomeEntidade" class="form-label">Insira Nome Da Entidade * </label>
        <input type="text" class="form-control" id="NomeEntidade" placeholder="nome" name="NomeEntidade"
            value="<?= $nome ?>">
    </div>
    <div class="mb-3">
        <label for="NomeCientifico" class="form-label">Insira Nome Cientifico </label>
        <input type="text" class="form-control" id="NomeCientifico" placeholder="nome cientifico" name="NomeCientifico"
            value="<?= $nomeCientifico ?>">
    </div>

    <p> Classificação da especie</p>
    <small><strong> Escolha Apenas um atributo </strong> </small>
    <br>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="inlineCheckbox1" name="Especies" value="Fauna" 
        <?php echo (strpos($tipoEspecie, 'Fauna') === false) ? '' :'checked' ; ?>>
        
        <label class="form-check-label" for="inlineCheckbox1">Fauna</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="inlineCheckbox2" name="Especies" value="Flora"
         <?php echo (strpos($tipoEspecie, 'Flora') === false) ? '' : 'checked' ; ?>>

        <label class="form-check-label" for="inlineCheckbox2">Flora</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="inlineCheckbox3" name="Especies" value="Fungo"  
        <?php echo (strpos($tipoEspecie, 'Fungo') === false) ? '' : 'checked'; ?>>

        <label class="form-check-label" for="inlineCheckbox3">Fungo</label>
    </div>



    <div class="mb-3">
        <label for="TipoHabitate" class="form-label">Insira tipo de habitate da entidade * </label>
        <input type="text" class="form-control" id="TipoHabitate" placeholder="Habitate" name="TipoHabitate"
            value="<?=  $tipoHabitate ?>" required>
    </div>

    <div class="mb-3">
        <label for="formFileMultiple" class="form-label"> Insira uma Imagem </label>
        <small heigt="30px">Extensões permitidas: .jpeg ,.jpg</small>
        <input class="form-control" type="file" id="formFileMultiple" name="Imagens" multiple>
    </div>

    <div class="mb-3">
        <input type="submit" value="enviar" class="btn outline btn-success">
    </div>


</form>




<?php include_once ("templates/footer.php") //Incluindo footer da página ?>