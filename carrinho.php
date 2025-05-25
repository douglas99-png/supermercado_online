<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/carrinho.css">
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
    <h2>Seu Carrinho</h2>

    <?php if(empty($_SESSION['carrinho'])): ?>
        <p>O carrinho está vazio.</p>
    <?php else: ?>
        <table class="tabela-carrinho">
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Total</th>
            </tr>
            <?php
            $total = 0;
            foreach($_SESSION['carrinho'] as $produto):
                $subtotal = $produto['preco'] * $produto['quantidade'];
                $total += $subtotal;
            ?>
            <tr>
                <td><?php echo $produto['nome']; ?></td>
                <td><?php echo $produto['quantidade']; ?></td>
                <td>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></td>
                <td>R$ <?php echo number_format($subtotal, 2, ',', '.'); ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="3"><strong>Total:</strong></td>
                <td><strong>R$ <?php echo number_format($total, 2, ',', '.'); ?></strong></td>
            </tr>
        </table>
    <?php endif; ?>
</div>

<footer>© 2025 Supermercado Online</footer>
</body>
</html>
