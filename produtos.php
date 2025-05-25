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
        <img src="https://http2.mlstatic.com/D_NQ_NP_710774-MLU74219033443_012024-O.webp" alt="Arroz">
        <h3>Arroz</h3>
        <p>Pacote 5kg</p>
        <p>R$ 25,00</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="https://mercantilnovaera.vtexassets.com/arquivos/ids/215343-800-450?v=638469753269400000&width=800&height=450&aspect=true" alt="Feijão">
        <h3>Feijão</h3>
        <p>Pacote 1kg</p>
        <p>R$ 8,00</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="https://tocantins.agilecdn.com.br/20426_1.jpg" alt="Óleo de Soja">
        <h3>Óleo de Soja</h3>
        <p>Garrafa 900ml</p>
        <p>R$ 6,50</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="https://propao.agilecdn.com.br/1744_1.jpg" alt="Açúcar">
        <h3>Açúcar</h3>
        <p>Pacote 5kg</p>
        <p>R$ 18,59</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="https://ibassets.com.br/ib.item.image.large/l-c54acdc6d1da4f50a37252efe847bbd7.jpeg" alt="Leite">
        <h3>Leite</h3>
        <p>Caixa 1L</p>
        <p>R$ 5,99</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="https://img.nivea.com/-/media/miscellaneous/media-center-items/d/c/b/117afc5a2a6548abbf0a5a17b0836aa5-screen.jpg" alt="Sabonete">
        <h3>Sabonete</h3>
        <p>Unidade</p>
        <p>R$ 1,98</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="https://images.tcdn.com.br/img/img_prod/1028719/detergente_ype_500ml_637_1_3ad87948aa8eabe38f077fbdcaf191d9.png" alt="Detergente">
        <h3>Detergente</h3>
        <p>500ml</p>
        <p>R$ 2,35</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="https://beagaembalagem.com.br/wp-content/uploads/2022/02/cotton-correto.jpg" alt="Papel Higiênico">
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
