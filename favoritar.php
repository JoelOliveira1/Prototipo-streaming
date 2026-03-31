<?php
// Inicia a sessão (sem o proteger.php para não redirecionar em requisições AJAX)
session_start();
include "conectar.php";

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    echo "nao_autorizado";
    exit();
}

// Pega o ID do filme enviado pelo formulário
$filme_id = isset($_POST['filme_id']) ? intval($_POST['filme_id']) : 0;

if ($filme_id === 0) {
    echo "erro";
    exit();
}

// Busca o ID do usuário logado
$nome       = $_SESSION['usuario'];
$sql_user   = "SELECT id FROM usuarios WHERE nome = '$nome'";
$res_user   = $conn->query($sql_user);
$usuario    = $res_user->fetch_assoc();
$usuario_id = $usuario['id'];

// Verifica se o favorito já existe
$sql_check = "SELECT id FROM favoritos WHERE usuario_id = $usuario_id AND filme_id = $filme_id";
$resultado = $conn->query($sql_check);

if ($resultado->num_rows > 0) {
    // Se já existe, REMOVE o favorito
    $sql_delete = "DELETE FROM favoritos WHERE usuario_id = $usuario_id AND filme_id = $filme_id";
    $conn->query($sql_delete);
    echo "removido";
} else {
    // Se não existe, ADICIONA o favorito
    $sql_insert = "INSERT INTO favoritos (usuario_id, filme_id) VALUES ($usuario_id, $filme_id)";
    $conn->query($sql_insert);
    echo "adicionado";
}
?>