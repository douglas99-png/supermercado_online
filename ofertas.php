<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ofertas</title>
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
    <h2>🔥 Ofertas Especiais 🔥</h2>

    <div class="product-grid">
        <div class="product">
            <img src="imagens/frutas.jpg" alt="Frutas">
            <h3>Frutas Frescas</h3>
            <p>Até 30% OFF em frutas selecionadas!</p>
            <span>De <s>R$ 10,00</s> por <strong>R$ 7,00</strong></span>
            <button onclick="alerta()">Adicionar ao Carrinho</button>
        </div>

        <div class="product">
            <img src="imagens/limpeza.jpg" alt="Produtos de Limpeza">
            <h3>Produtos de Limpeza</h3>
            <p>Leve 3, pague 2!</p>
            <span>Desconto aplicado no carrinho</span>
            <button onclick="alerta()">Adicionar ao Carrinho</button>
        </div>

        <div class="product">
            <img src="imagens/bebidas.jpg" alt="Bebidas">
            <h3>Bebidas Variadas</h3>
            <p>Na compra de 2 caixas, 10% de desconto</p>
            <span>Oferta por tempo limitado</span>
            <button onclick="alerta()">Adicionar ao Carrinho</button>
        </div>

        <div class="product">
            <img src="https://m.media-amazon.com/images/I/61fJ9Pe6UBL.jpg" alt="Café">
            <h3>Café</h3>
            <p>Pacote 500g</p>
            <span>De <s>R$ 16,90</s> por <strong>R$ 14,90</strong></span>
            <button onclick="alerta()">Adicionar ao Carrinho</button>
        </div>

        <div class="product">
            <img src="https://propao.agilecdn.com.br/1744_1.jpg" alt="Açúcar">
            <h3>Açúcar</h3>
            <p>Pacote 5kg</p>
            <span>De <s>R$ 18,59</s> por <strong>R$ 15,99</strong></span>
            <button onclick="alerta()">Adicionar ao Carrinho</button>
        </div>

        <div class="product">
            <img src="https://cdn-cosmos.bluesoft.com.br/products/7898904745009" alt="Presunto">
            <h3>Presunto</h3>
            <p>Kg</p>
            <span>De <s>R$ 27,90</s> por <strong>R$ 24,90</strong></span>
            <button onclick="alerta()">Adicionar ao Carrinho</button>
        </div>

        <div class="product">
            <img src="https://superprix.vteximg.com.br/arquivos/ids/203303-1000-1000/152124.jpg?v=636294334593200000" alt="Manteiga">
            <h3>Manteiga</h3>
            <p>Pote 500g</p>
            <span>De <s>R$ 9,99</s> por <strong>R$ 7,99</strong></span>
            <button onclick="alerta()">Adicionar ao Carrinho</button>
        </div>

        <div class="product">
            <img src="https://d2r9epyceweg5n.cloudfront.net/stores/001/178/743/products/cerveja1-06f5be666f87985c9b15979404534247-1024-1024.jpg" alt="Cerveja">
            <h3>Cerveja</h3>
            <p>350ml</p>
            <span>Leve 6, pague 5!</span>
            <button onclick="alerta()">Adicionar ao Carrinho</button>
        </div>
    </div>
</div>

<footer>
    © 2025 Supermercado Online
</footer>

<script src="js/script.js"></script>

</body>
</html>
