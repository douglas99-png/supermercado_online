<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Supermercado Online</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/index.css">


</head>
<body>

<header>
    <h1>Supermercado Online</h1>
    <nav>
        <a href="index.php">Início</a>
        <a href="produtos.php">Produtos</a>
        <a href="ofertas.php">Ofertas</a>
        <a href="carrinho.php">Carrinho</a>
        <a href="contato.php">Contato</a>
        <?php if(isset($_SESSION['id'])): ?>
            <a href="painel.php">Painel</a>
            <a href="logout.php">Sair</a>
        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="cadastro.php">Cadastro</a>
        <?php endif; ?>
    </nav>
</header>

<div class="container">
    <h2>Bem-vindo ao Supermercado Online</h2>
    <p>Suas compras sem sair de casa!</p>
</div>

<footer>© 2025 Supermercado Online</footer>
</body>
</html>
