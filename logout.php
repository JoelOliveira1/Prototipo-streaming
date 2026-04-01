<?php
session_start();

// limpa tudo
$_SESSION = [];

// destrói sessão
session_destroy();

// força o navegador a não guardar cache
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// redireciona
header("Location: login.html");
exit();
?>