<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ofertas - Supermercado Online</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/ofertas.css">
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
    <h2>Ofertas Especiais</h2>

    <div class="oferta-grid">
        <div class="oferta">
            <img src="https://superprix.vteximg.com.br/arquivos/ids/184891-1000-1000/frutas.jpg" alt="Frutas">
            <h3>Frutas Frescas</h3>
            <p>Até 30% OFF em frutas selecionadas!</p>
            <span class="preco-antigo">R$ 10,00</span>
            <span class="preco-oferta">R$ 7,00</span>
            <button onclick="alerta()">Adicionar ao Carrinho</button>
        </div>

        <div class="oferta">
            <img src="https://images.tcdn.com.br/img/img_prod/619652/limpeza_289_1_20201215131534.jpg" alt="Limpeza">
            <h3>Produtos de Limpeza</h3>
            <p>Leve 3, pague 2!</p>
            <span class="preco-antigo">R$ 6,00</span>
            <span class="preco-oferta">R$ 4,00</span>
            <button onclick="alerta()">Adicionar ao Carrinho</button>
        </div>

        <div class="oferta">
            <img src="https://cdn.dooca.store/779/products/coca-cola-lata-350ml_600x600+fill_ffffff.png" alt="Bebidas">
            <h3>Bebidas</h3>
            <p>Na compra de 2 caixas, 10% de desconto</p>
            <span class="preco-antigo">R$ 7,99</span>
            <span class="preco-oferta">R$ 6,99</span>
            <button onclick="alerta()">Adicionar ao Carrinho</button>
        </div>
    </div>
</div>

<footer>
    © 2025 Supermercado Online
</footer>

<script>
function alerta() {
    Swal.fire({
        icon: 'success',
        title: 'Oferta aplicada!',
        text: '🛒 Produto adicionado ao carrinho com desconto!',
        showConfirmButton: false,
        timer: 1500
    });
}
</script>

</body>
</html>
