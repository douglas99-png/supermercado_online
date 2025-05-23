<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container">
    <h1>Login</h1>
    <form action="processa_login.php" method="POST">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <button type="submit">Entrar</button>
    </form>
    <a href="cadastro.php">Não tem conta? Cadastre-se</a>
</div>
</body>
</html>
