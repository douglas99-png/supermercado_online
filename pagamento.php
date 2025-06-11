<?php
session_start();


if (empty($_SESSION['carrinho'])) {
    header("Location: carrinho.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['nome'], $_POST['cpf'], $_POST['pagamento'])) {
    $nome = htmlspecialchars($_POST['nome']);
    $cpf = htmlspecialchars($_POST['cpf']);
    $forma = htmlspecialchars($_POST['pagamento']);



    $_SESSION['carrinho'] = []; // Limpa carrinho após a compra
    $mensagem = "Compra finalizada com sucesso por $nome usando $forma!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pagamento</title>
    <link rel="stylesheet" href="css/global.css">
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
        <a href="login.php">Login</a>
        <a href="cadastro.php">Cadastro</a>
    </nav>
</header>

<div class="container">
    <h2>Pagamento</h2>

    <?php if (isset($mensagem)): ?>
        <p><strong><?php echo $mensagem; ?></strong></p>
    <?php else: ?>
        <h3>Resumo da Compra:</h3>
        <ul>
            <?php
            $total = 0;
            foreach ($_SESSION['carrinho'] as $item) {
                $sub = $item['preco'] * $item['quantidade'];
                $total += $sub;
                echo "<li>{$item['quantidade']}x {$item['nome']} - R$ " . number_format($sub, 2, ',', '.') . "</li>";
            }
            ?>
        </ul>
        <p><strong>Total: R$ <?php echo number_format($total, 2, ',', '.'); ?></strong></p>

        <h3>Dados para pagamento:</h3>
        <form method="post">
            <label for="nome">Nome Completo:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="cpf">CPF:</label><br>
            <input type="text" id="cpf" name="cpf" required><br><br>

            <label for="pagamento">Forma de Pagamento:</label><br>
            <select id="pagamento" name="pagamento" required>
                <option value="Cartão de Crédito">Cartão de Crédito</option>
                <option value="Cartão de Débito">Cartão de Débito</option>
                <option value="Pix">Pix</option>
                <option value="Boleto">Boleto</option>
            </select><br><br>

            <button type="submit">💰 Finalizar Compra</button>
        </form>
    <?php endif; ?>
</div>

<footer>© 2025 Supermercado Online</footer>
</body>
</html>
