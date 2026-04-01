<?php
session_start();
include "conectar.php";

// 🔒 verifica se está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit();
}

// 🔒 se já for premium, bloqueia
if (isset($_SESSION['categoria']) && $_SESSION['categoria'] == 'premium') {
    header("Location: upgrade.php?ja=1");
    exit();
}

$nome = $_SESSION['usuario'];

// atualiza no banco
$sql = "UPDATE usuarios SET categoria = 'premium' WHERE nome = '$nome'";

if ($conn->query($sql) === TRUE) {

    // atualiza na sessão
    $_SESSION['categoria'] = 'premium';

    // sucesso
    header("Location: upgrade.php?sucesso=1");
    exit();

} else {

    // erro no banco
    header("Location: upgrade.php?erro=1");
    exit();
}
?>