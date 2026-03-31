<?php
session_start();

// verifica categoria
if (!isset($_SESSION['categoria']) || $_SESSION['categoria'] != 'premium') {
    header("Location: upgrade.php");
    exit();
}

// se for premium → redireciona pro vídeo
header("Location: https://youtu.be/0V4TiaU06uo?si=Jj4yjc1ekEaTr5Bk");
exit();
?>