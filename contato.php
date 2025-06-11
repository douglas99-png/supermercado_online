<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contato</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/contato.css">
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
    <h2>Fale Conosco</h2>
    <p>Envie sua dúvida, sugestão ou reclamação:</p>
    <form>
        <input type="text" placeholder="Seu nome" required><br>
        <input type="email" placeholder="Seu email" required><br>
        <textarea placeholder="Digite sua mensagem" rows="5" required></textarea><br>
        <button type="submit">Enviar</button>
    </form>
</div>

<footer>© 2025 Supermercado Online</footer>
</body>
</html>
