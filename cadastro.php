<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Cadastro</h1>
    <form action="processa_cadastro.php" method="POST">
        <input type="text" name="nome" placeholder="Nome" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <button type="submit">Cadastrar</button>
    </form>
    <a href="login.php">Já tem conta? Login</a>
</div>
</body>
</html>
