<?php include "proteger.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Streaming de Filmes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    
    <header class="menu">
        <h1>Nityfrix</h1>
    
        <nav>
            <a href="#">Início</a>
            <a href="#">Filmes</a>
            <a href="#">Séries</a>
            <a href="#">Minha Lista</a>
            <a href="perfil.php">Perfil</a>
        </nav>
        
    </header>

    <div class="boas-vindas">
    <h2>Boas-vindas <?php echo $_SESSION['usuario']; ?></h2>
    </div>    

    <main class="container-filmes">

        
        <div class="box-filme"></div>
        <div class="box-filme"></div>
        <div class="box-filme"></div>
        <div class="box-filme"></div>

        <div class="box-filme"></div>
        <div class="box-filme"></div>
        <div class="box-filme"></div>
        <div class="box-filme"></div>

        <div class="box-filme"></div>
        <div class="box-filme"></div>
        <div class="box-filme"></div>
        <div class="box-filme"></div>

    </main>

</body>
</html>