<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/produtos.css">
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
    <h2>Produtos</h2>

    <div class="product">
        <img src="imagens/arroz.jpg" alt="Arroz">
        <h3>Arroz</h3>
        <p>Pacote 5kg</p>
        <p>R$ 25,00</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="imagens/feijao.jpg" alt="Feijão">
        <h3>Feijão</h3>
        <p>Pacote 1kg</p>
        <p>R$ 8,00</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="imagens/oleo.jpg" alt="Óleo de Soja">
        <h3>Óleo de Soja</h3>
        <p>Garrafa 900ml</p>
        <p>R$ 6,50</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="imagens/acucar.jpg" alt="Açúcar">
        <h3>Açúcar</h3>
        <p>Pacote 5kg</p>
        <p>R$ 18,59</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="imagens/leite.jpg" alt="Leite">
        <h3>Leite</h3>
        <p>Caixa 1L</p>
        <p>R$ 5,99</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="imagens/sabonete.jpg" alt="Sabonete">
        <h3>Sabonete</h3>
        <p>Unidade</p>
        <p>R$ 1,98</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="imagens/detergente.jpg" alt="Detergente">
        <h3>Detergente</h3>
        <p>500ml</p>
        <p>R$ 2,35</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="imagens/papel.jpg" alt="Papel Higiênico">
        <h3>Papel Higiênico</h3>
        <p>Fardo com 12 unidades</p>
        <p>R$ 21,49</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

</div>

<footer>
    © 2025 Supermercado Online
</footer>

<script src="js/script.js"></script>

</body>
</html>
