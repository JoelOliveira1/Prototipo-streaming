<?php
session_start();
include "conectar.php";

$nome = $_SESSION['usuario'];

// atualiza no banco
$sql = "UPDATE usuarios SET categoria = 'premium' WHERE nome = '$nome'";
$conn->query($sql);

// atualiza na sessão
$_SESSION['categoria'] = 'premium';

// manda mensagem de sucesso
header("Location: upgrade.php?sucesso=1");
exit();
?>