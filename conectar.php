<?php

$host     = "localhost";
$usuario  = "root";       
$senha    = "";           
$banco    = "nityfrix";   


$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
}


$conn->set_charset("utf8");
?>