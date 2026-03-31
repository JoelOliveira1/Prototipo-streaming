<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Upgrade - Nityfrix</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<!-- Menu igual ao resto do site -->
<header class="menu">
    <h1 class="logo">Nityfrix</h1>
    <nav>
        <a href="index.php">Início</a>
        <a href="perfil.php">Perfil</a>
    </nav>
</header>

<main style="margin-top: 120px; display:flex; justify-content:center;">

    <div style="
        background: #141414;
        border: 1px solid #2a2a2a;
        border-radius: 12px;
        padding: 40px;
        text-align: center;
        max-width: 400px;
        width: 90%;
        box-shadow: 0 8px 30px rgba(0,0,0,0.6);
    ">

        <?php if (isset($_GET['sucesso'])): ?>
            <div style="
                background: rgba(34,197,94,0.15);
                color: #22c55e;
                padding: 10px;
                border-radius: 8px;
                margin-bottom: 20px;
                font-weight: 600;
            ">
                ✅ Agora você é Premium! Aproveite 🎉
            </div>
        <?php endif; ?>

        <h2 style="color:#c084fc; margin-bottom:10px;">🚀 Vire Premium</h2>

        <p style="color:#aaa; font-size:0.9rem; margin-bottom:20px;">
            Desbloqueie todos os recursos do Nityfrix
        </p>

        <ul style="
            list-style:none;
            padding:0;
            margin-bottom:25px;
            color:#ccc;
            font-size:0.9rem;
        ">
            <li style="margin:8px 0;">📌 Assistir Filmes</li>
            <li style="margin:8px 0;">🔥 Conteúdos exclusivos</li>
        </ul>

        <a href="assinar.php" class="btn-assistir">
            Virar Premium
        </a>

    </div>

</main>

<?php if (isset($_GET['sucesso'])): ?>
<script>
setTimeout(() => {
    window.location.href = "index.php";
}, 2000);
</script>
<?php endif; ?>

</body>
</html>