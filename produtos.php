<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/produtos.css">

</head>
<body>

<header>
    <h1>Produtos</h1>
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
    <h2>Produtos</h2>
    <div class="product">
        <h3>Arroz</h3>
        <p>Pacote 5kg</p>
        <p>R$ 25,00</p>
        <button>Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <h3>Feijão</h3>
        <p>Pacote 1kg</p>
        <p>R$ 8,00</p>
        <button>Adicionar ao Carrinho</button>
    </div>
</div>

<footer>
    © 2025 Supermercado Online
</footer>
</body>
</html>
