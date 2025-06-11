<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST['limpar'])) {
        unset($_SESSION['carrinho']);
        header("Location: carrinho.php");
        exit();
    }


    if (isset($_POST['remover'])) {
        $nome = $_POST['remover'];
        foreach ($_SESSION['carrinho'] as $index => $item) {
            if ($item['nome'] === $nome) {
                $_SESSION['carrinho'][$index]['quantidade']--;
                if ($_SESSION['carrinho'][$index]['quantidade'] <= 0) {
                    unset($_SESSION['carrinho'][$index]);
                }
                break;
            }
        }
        header("Location: carrinho.php");
        exit();
    }

  
    if (isset($_POST['produto'], $_POST['preco'])) {
        $nome = $_POST['produto'];
        $preco = floatval(str_replace(',', '.', $_POST['preco']));

        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = [];
        }

        $encontrado = false;
        foreach ($_SESSION['carrinho'] as &$item) {
            if ($item['nome'] === $nome) {
                $item['quantidade']++;
                $encontrado = true;
                break;
            }
        }
        unset($item);

        if (!$encontrado) {
            $_SESSION['carrinho'][] = [
                'nome' => $nome,
                'preco' => $preco,
                'quantidade' => 1
            ];
        }

        header("Location: carrinho.php");
        exit();
    }
}
?>

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
        <form method="post">
            <button type="submit" name="limpar" value="1">Esvaziar Carrinho</button>
        </form>

        <table class="tabela-carrinho">
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Total</th>
                <th>Ação</th>
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
                <td>
                    <form method="post" style="display:inline;">
                        <button type="submit" name="remover" value="<?php echo $produto['nome']; ?>">❌ Remover 1</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="3"><strong>Total:</strong></td>
                <td colspan="2"><strong>R$ <?php echo number_format($total, 2, ',', '.'); ?></strong></td>
            </tr>
        </table>

        <div style="text-align: center; margin-top: 20px;">
            <a href="pagamento.php" style="background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-weight: bold;">
                Ir para Pagamento
            </a>
        </div>
    <?php endif; ?>
</div>

<footer>© 2025 Supermercado Online</footer>
</body>
</html>
