<?php session_start(); ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ofertas</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/Ofertas.css">
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
        <a href="login.php">Login</a>
        <a href="cadastro.php">Cadastro</a>
    </nav>
</header>

<div class="container">
    <h2>Ofertas Especiais</h2>

    <div class="offers">
        <div class="offer">
            <img src="imagens/frutas.jpg" alt="Frutas">
            <h3>Frutas Frescas</h3>
            <p>Até 30% OFF em frutas selecionadas!</p>
            <span>De R$ 10,00 por R$ 7,00</span>
            <button>Adicionar ao Carrinho</button>
        </div>

        <div class="offer">
            <img src="imagens/limpeza.jpg" alt="Produtos de Limpeza">
            <h3>Produtos de Limpeza</h3>
            <p>Leve 3, pague 2!</p>
            <span>Desconto aplicado no carrinho</span>
            <button>Adicionar ao Carrinho</button>
        </div>

        <div class="offer">
            <img src="imagens/bebidas.jpg" alt="Bebidas">
            <h3>Bebidas</h3>
            <p>Na compra de 2 caixas, 10% de desconto</p>
            <span>Oferta por tempo limitado</span>
            <button>Adicionar ao Carrinho</button>
        </div>
    </div>
</div>

<footer>
    © 2025 Supermercado Online
</footer>

</body>
</html>

