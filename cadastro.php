<?php
session_start();
include "conectar.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha)
VALUES ('$nome','$email','$senhaHash')";

if($conn->query($sql) === TRUE){

    // cria sessão do usuário
    $_SESSION['usuario'] = $nome;

    // abre o site
    header("Location: index.php");
    exit();

}else{

    echo "Erro: " . $conn->error;

}

?>