<?php
include_once ("../db/conexao.php"); // Incluindo conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (
        isset($_POST["NomeEntidade"]) && isset($_POST["NomeCientifico"]) && isset($_POST["Especies"])
        && isset($_FILES["Imagens"]) && isset($_POST["Ecossistema"])
    ) {
        var_dump($_FILES);

        $nomeEntidade = trim($_POST["NomeEntidade"]);
        $nomeCientifico = trim($_POST["NomeCientifico"]);
        $tipoEspecie = $_POST["Especies"];
        $tipoHabitate = trim($_POST["Ecossistema"]);

        $path = "../arquivos/";

        foreach ($_FILES["Imagens"]["tmp_name"] as $key => $tmp_name) {
            $nomeArquivo = $_FILES["Imagens"]["name"][$key];
            $extension = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

            // Verifica a extensão do arquivo
            if ($extension != "jpg" && $extension != "jpeg") {
                die("Tipo de extensão inválida para o arquivo $nomeArquivo");
            }

            // Gera um nome único para o arquivo
            $novoNomeArquivo = uniqid() . "." . $extension;

            // Move o arquivo para o diretório de destino
            $arquivoMovido = move_uploaded_file($tmp_name, $path . $novoNomeArquivo);
            $caminhoArquivo = $path . $novoNomeArquivo;
            // Verifica se o arquivo foi movido com sucesso
            if ($arquivoMovido) {
                // Insere os dados da espécie no banco de dados
                $query = $conexao->prepare("INSERT INTO especies (Nome, NomeCientifico, TipoEspecie, TipoHabitate) VALUES (?, ?, ?, ?)");
                $query->bind_param("ssss", $nomeEntidade, $nomeCientifico, $tipoEspecie, $tipoHabitate);
                $query->execute();
                $especieId = $query->insert_id;
                $query->close();

                // Insere o caminho da imagem na tabela especies_imagens
                $queryImg = $conexao->prepare("INSERT INTO especies_imagens (EspecieId, CaminhoImagem) VALUES (?, ?)");
                $queryImg->bind_param("is", $especieId, $caminhoArquivo);
                $queryImg->execute();
                $queryImg->close();
                // header("Location: ../index.php");
                // exit;
            }
        }
    }
}
?>