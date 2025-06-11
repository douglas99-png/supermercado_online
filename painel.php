<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel do Usuário - Supermercado Online</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/painel.css">
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
        <a href="logout.php">Sair</a>
    </nav>
</header>

<div class="painel">
    <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['nome']); ?>!</h2>
    <p><strong>Email ou CNPJ:</strong> <?php echo htmlspecialchars($_SESSION['email'] ?? $_SESSION['cnpj'] ?? ''); ?></p>

    <div class="painel-menu">
        <a href="produtos.php" class="botao">Ver Produtos</a>
        <a href="carrinho.php" class="botao">Ver Carrinho</a>
        <a href="logout.php" class="botao sair">Sair</a>
    </div>
</div>

<footer>
    &copy; 2025 Supermercado Online
</footer>

</body>
</html>
