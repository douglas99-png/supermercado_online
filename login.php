<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
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

<div class="login-container">
    <h2>Login</h2>

    <form action="processa_login.php" method="POST">
        <div class="radio-group">
            <label>Você é:</label><br>
            <input type="radio" name="tipo" value="fisica" onclick="mostrarCampos()" required> Pessoa Física 🧍‍♂️
            <input type="radio" name="tipo" value="empresa" onclick="mostrarCampos()" required> Estabelecimento 🏢
        </div>

        <div id="campoEmail" style="display:none;">
            <input type="email" name="email" placeholder="Email">
        </div>

        <div id="campoCNPJ" style="display:none;">
            <input type="text" name="cnpj" placeholder="CNPJ">
        </div>

        <input type="password" name="senha" placeholder="Senha" required>

        <button type="submit">Entrar</button>
    </form>

    <a href="cadastro.php">Não tem conta? Cadastre-se</a>
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
