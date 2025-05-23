<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</h1>
    <p>Seu e-mail: <?php echo $_SESSION['email']; ?></p>
    <a href="logout.php">Sair</a>
</div>
</body>
</html>
