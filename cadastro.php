<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro - Supermercado Online</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/cadastro.css">
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
        <a href="login.php">Login</a>
    </nav>
</header>

<div class="cadastro-container">
    <h2>Criar Conta</h2>
    <form action="processa_cadastro.php" method="POST" onsubmit="return validarCadastro()">
        <div class="radio-group">
            <label><input type="radio" name="tipo" value="cliente" checked onclick="alternarCampos()"> Pessoa Física</label>
            <label><input type="radio" name="tipo" value="estabelecimento" onclick="alternarCampos()"> Estabelecimento</label>
        </div>

        <div id="campoEmail">
            <input type="email" name="email" placeholder="Digite seu e-mail" required>
        </div>

        <div id="campoCNPJ" style="display:none;">
            <input type="text" name="cnpj" placeholder="Digite seu CNPJ">
        </div>

        <input type="text" name="nome" placeholder="Nome completo ou Razão social" required>
        <input type="password" name="senha" placeholder="Crie uma senha" required>
        <button type="submit">Cadastrar</button>
    </form>
    <a href="login.php">Já tem conta? Fazer login</a>
</div>

<footer>
    &copy; 2025 Supermercado Online
</footer>

<script>
function alternarCampos() {
    const tipo = document.querySelector('input[name="tipo"]:checked').value;
    document.getElementById('campoEmail').style.display = tipo === 'cliente' ? 'block' : 'none';
    document.getElementById('campoCNPJ').style.display = tipo === 'estabelecimento' ? 'block' : 'none';
}

function validarCadastro() {
    const tipo = document.querySelector('input[name="tipo"]:checked').value;
    const email = document.querySelector('input[name="email"]');
    const cnpj = document.querySelector('input[name="cnpj"]');
    const nome = document.querySelector('input[name="nome"]').value;
    const senha = document.querySelector('input[name="senha"]').value;

    if ((tipo === "cliente" && email.value === "") || (tipo === "estabelecimento" && cnpj.value === "") || nome === "" || senha === "") {
        Swal.fire({
            icon: 'error',
            title: 'Campos obrigatórios!',
            text: 'Por favor, preencha todos os campos necessários.'
        });
        return false;
    }
    return true;
}
</script>

</body>
</html>
