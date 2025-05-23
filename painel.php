<?php session_start();
if(!isset($_SESSION['id'])){
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>Painel do Usuário</h1>
    <nav>
        <a href="index.php">Início</a>
        <a href="produtos.php">Produtos</a>
        <a href="ofertas.php">Ofertas</a>
        <a href="carrinho.php">Carrinho</a>
        <a href="contato.php">Contato</a>
        <a href="logout.php">Sair</a>
    </nav>
</header>

<div class="container">
    <h2>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</h2>
    <p>Seu email: <?php echo $_SESSION['email']; ?></p>
</div>

<footer>
    © 2025 Supermercado Online
</footer>
</body>
</html>
