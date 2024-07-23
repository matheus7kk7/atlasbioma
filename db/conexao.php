<?php



$host = "localhost";
$user = "root";
$pass = "";
$database = "atlas_biomas";

$conexao = new mysqli($host, $user, $pass, $database);
if ($conexao == true) {
    // echo "conectado";
} else {
    die($conexao->errno);
}



