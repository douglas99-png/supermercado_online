<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
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
    <h1>Cadastro</h1>

    <form action="processa_cadastro.php" method="POST">
        <label>Você é:</label><br>
        <input type="radio" name="tipo" value="fisica" onclick="mostrarCampos()" required> Pessoa Física 🧍‍♂️<br>
        <input type="radio" name="tipo" value="empresa" onclick="mostrarCampos()" required> Estabelecimento 🏢<br><br>

        <div id="campoEmail" style="display:none;">
            <input type="email" name="email" placeholder="Email"><br>
        </div>

        <div id="campoCNPJ" style="display:none;">
            <input type="text" name="cnpj" placeholder="CNPJ"><br>
        </div>

        <input type="text" name="nome" placeholder="Nome Completo ou Razão Social" required><br>
        <input type="password" name="senha" placeholder="Senha" required><br>

        <button type="submit">Cadastrar</button>
    </form>

    <a href="login.php">Já tem conta? Login</a>
</div>

<footer>© 2025 Supermercado Online</footer>

<script>
function mostrarCampos() {
    const tipo = document.querySelector('input[name="tipo"]:checked').value;
    if(tipo === 'fisica') {
        document.getElementById('campoEmail').style.display = 'block';
        document.getElementById('campoCNPJ').style.display = 'none';
    } else if(tipo === 'empresa') {
        document.getElementById('campoEmail').style.display = 'none';
        document.getElementById('campoCNPJ').style.display = 'block';
    }
}
</script>

</body>
</html>
