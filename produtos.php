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

    <!-- 🔥 Produtos novos adicionados 🔥 -->

    <div class="product">
        <img src="https://m.media-amazon.com/images/I/61fJ9Pe6UBL.jpg" alt="Café">
        <h3>Café</h3>
        <p>Pacote 500g</p>
        <p>R$ 16,90</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="https://superprix.vteximg.com.br/arquivos/ids/203303-1000-1000/152124.jpg?v=636294334593200000" alt="Manteiga">
        <h3>Manteiga</h3>
        <p>Pote 500g</p>
        <p>R$ 9,99</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="https://delivery.shopfacil.com.br/Media/Cache/Images/3/0/177678_1.jpg" alt="Queijo Mussarela">
        <h3>Queijo Mussarela</h3>
        <p>Kg</p>
        <p>R$ 29,90</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="https://cdn-cosmos.bluesoft.com.br/products/7898904745009" alt="Presunto">
        <h3>Presunto</h3>
        <p>Kg</p>
        <p>R$ 27,90</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="https://www.cervejastore.com.br/media/catalog/product/cache/207e23213cf636ccdef205098cf3c8a3/r/e/refrigerante-coca-cola-lata-350ml_1.jpg" alt="Refrigerante">
        <h3>Refrigerante</h3>
        <p>2 Litros</p>
        <p>R$ 7,99</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="https://d2r9epyceweg5n.cloudfront.net/stores/001/178/743/products/cerveja1-06f5be666f87985c9b15979404534247-1024-1024.jpg" alt="Cerveja">
        <h3>Cerveja</h3>
        <p>350ml</p>
        <p>R$ 3,99</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="https://cdn.awsli.com.br/600x450/2452/2452817/produto/246172587/5aa91b4288.jpg" alt="Água Mineral">
        <h3>Água Mineral</h3>
        <p>1,5 Litro</p>
        <p>R$ 2,50</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="https://d3ugyf2ht6aenh.cloudfront.net/stores/001/081/158/products/farinha1-06e14f8c4d7a8df8d016301bde739de9-640-0.jpg" alt="Farinha de Trigo">
        <h3>Farinha de Trigo</h3>
        <p>Pacote 1kg</p>
        <p>R$ 5,99</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="https://http2.mlstatic.com/D_NQ_NP_670604-MLB70008185964_062023-O.webp" alt="Sal">
        <h3>Sal</h3>
        <p>Pacote 1kg</p>
        <p>R$ 2,99</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

    <div class="product">
        <img src="https://a-static.mlcdn.com.br/800x560/achocolatado-nescau-2-0-caixa-400g/magazineluiza/229196500/43350fc2dfbd3fd91eecddc62cbeb38d.jpg" alt="Achocolatado">
        <h3>Achocolatado</h3>
        <p>Lata 400g</p>
        <p>R$ 8,99</p>
        <button onclick="alerta()">Adicionar ao Carrinho</button>
    </div>

</div>

<footer>
    © 2025 Supermercado Online
</footer>

<script src="js/script.js"></script>

</body>
</html>
