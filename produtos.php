<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/produtos.css">


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <div class="product-grid">
        <?php
        $produtos = [
            ["nome" => "Arroz", "descricao" => "Pacote 5kg", "preco" => "25,00", "img" => "https://http2.mlstatic.com/D_NQ_NP_710774-MLU74219033443_012024-O.webp"],
            ["nome" => "Feijão", "descricao" => "Pacote 1kg", "preco" => "8,00", "img" => "https://mercantilnovaera.vtexassets.com/arquivos/ids/215343-800-450?v=638469753269400000&width=800&height=450&aspect=true"],
            ["nome" => "Óleo de Soja", "descricao" => "Garrafa 900ml", "preco" => "6,50", "img" => "https://tocantins.agilecdn.com.br/20426_1.jpg"],
            ["nome" => "Açúcar", "descricao" => "Pacote 5kg", "preco" => "18,59", "img" => "https://propao.agilecdn.com.br/1744_1.jpg"],
            ["nome" => "Leite", "descricao" => "Caixa 1L", "preco" => "5,99", "img" => "https://ibassets.com.br/ib.item.image.large/l-c54acdc6d1da4f50a37252efe847bbd7.jpeg"],
            ["nome" => "Sabonete", "descricao" => "Unidade", "preco" => "1,98", "img" => "https://img.nivea.com/-/media/miscellaneous/media-center-items/d/c/b/117afc5a2a6548abbf0a5a17b0836aa5-screen.jpg"],
            ["nome" => "Detergente", "descricao" => "500ml", "preco" => "2,35", "img" => "https://images.tcdn.com.br/img/img_prod/1028719/detergente_ype_500ml_637_1_3ad87948aa8eabe38f077fbdcaf191d9.png"],
            ["nome" => "Papel Higiênico", "descricao" => "Fardo com 12 unidades", "preco" => "21,49", "img" => "https://beagaembalagem.com.br/wp-content/uploads/2022/02/cotton-correto.jpg"],
            ["nome" => "Café", "descricao" => "Pacote 500g", "preco" => "16,90", "img" => "https://m.media-amazon.com/images/I/61fJ9Pe6UBL.jpg"],
            ["nome" => "Manteiga", "descricao" => "Pote 500g", "preco" => "9,99", "img" => "https://superprix.vteximg.com.br/arquivos/ids/203303-1000-1000/152124.jpg?v=636294334593200000"],
            ["nome" => "Queijo Mussarela", "descricao" => "Kg", "preco" => "28,90", "img" => "https://delivery.shopfacil.com.br/Media/Cache/Images/3/0/177678_1.jpg"],
            ["nome" => "Presunto", "descricao" => "Kg", "preco" => "27,90", "img" => "https://cdn-cosmos.bluesoft.com.br/products/7898904745009"],
            ["nome" => "Refrigerante", "descricao" => "2 Litros", "preco" => "7,99", "img" => "https://www.cervejastore.com.br/media/catalog/product/cache/207e23213cf636ccdef205098cf3c8a3/r/e/refrigerante-coca-cola-lata-350ml_1.jpg"],
            ["nome" => "Cerveja", "descricao" => "350ml", "preco" => "3,99", "img" => "https://d2r9epyceweg5n.cloudfront.net/stores/001/178/743/products/cerveja1-06f5be666f87985c9b15979404534247-1024-1024.jpg"],
            ["nome" => "Água Mineral", "descricao" => "1,5 Litro", "preco" => "2,50", "img" => "https://cdn.awsli.com.br/600x450/2452/2452817/produto/246172587/5aa91b4288.jpg"],
            ["nome" => "Farinha de Trigo", "descricao" => "Pacote 1kg", "preco" => "5,99", "img" => "https://d3ugyf2ht6aenh.cloudfront.net/stores/001/081/158/products/farinha1-06e14f8c4d7a8df8d016301bde739de9-640-0.jpg"],
            ["nome" => "Sal", "descricao" => "Pacote 1kg", "preco" => "2,99", "img" => "https://http2.mlstatic.com/D_NQ_NP_670604-MLB70008185964_062023-O.webp"],
            ["nome" => "Achocolatado", "descricao" => "Lata 400g", "preco" => "8,99", "img" => "https://a-static.mlcdn.com.br/800x560/achocolatado-nescau-2-0-caixa-400g/magazineluiza/229196500/43350fc2dfbd3fd91eecddc62cbeb38d.jpg"],
        ];

        foreach ($produtos as $produto) {
            echo "<div class='product'>";
            echo "<img src='{$produto['img']}' alt='{$produto['nome']}'>";
            echo "<h3>{$produto['nome']}</h3>";
            echo "<p>{$produto['descricao']}</p>";
            echo "<p>R$ {$produto['preco']}</p>";
        
            echo "<form method='post' action='carrinho.php'>";
            echo "<input type='hidden' name='produto' value='{$produto['nome']}'>";
            echo "<input type='hidden' name='preco' value='{$produto['preco']}'>";
            echo "<button type='submit'>Adicionar ao Carrinho</button>";
            echo "</form>";
        
            echo "</div>";
        }
        ?>
    </div> 

    <footer>
        © 2025 Supermercado Online
    </footer>

    <script>
    function alerta() {
        Swal.fire({
            icon: 'success',
            title: 'Adicionado!',
            text: '🛒 Produto adicionado ao carrinho!',
            showConfirmButton: false,
            timer: 1500
        });
    }
    </script>

</body>
</html>
