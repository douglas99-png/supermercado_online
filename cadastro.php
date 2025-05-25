<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>Supermercado Online</h1>
    <nav>
        <a href="index.php">Início</a>
        <a href="produtos.php">Produtos</a>
        <a href="ofertas.php">Ofertas</a>
        <a href="carrinho.php">🛒 Carrinho</a>
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
    <h1>Cadastro</h1>
    <form action="processa_cadastro.php" method="POST">
        <input type="text" name="nome" placeholder="Nome" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <button type="submit">Cadastrar</button>
    </form>
    <a href="login.php">Já tem conta? Login</a>
</div>

<footer>© 2025 Supermercado Online</footer>
</body>
</html>
