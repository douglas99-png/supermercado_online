<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Supermercado Online</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css"> 
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
        <a href="cadastro.php">Cadastro</a>
    </nav>
</header>

<div class="login-container">
    <h2>Entrar na Conta</h2>
    <form action="processa_login.php" method="POST" onsubmit="return validarLogin()">
        <input type="email" name="email" placeholder="Digite seu e-mail" required>
        <input type="password" name="senha" placeholder="Digite sua senha" required>
        <button type="submit">Entrar</button>
    </form>
    <a href="cadastro.php">Não tem conta? Cadastre-se</a>
</div>

<footer>
    &copy; 2025 Supermercado Online
</footer>

<script>
function validarLogin() {
    const email = document.querySelector('input[name="email"]').value;
    const senha = document.querySelector('input[name="senha"]').value;

    if (email === '' || senha === '') {
        Swal.fire({
            icon: 'error',
            title: 'Campos obrigatórios!',
            text: 'Por favor, preencha todos os campos.'
        });
        return false;
    }
    return true;
}
</script>

</body>
</html>
