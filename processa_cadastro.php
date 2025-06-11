<?php
session_start();
include('conexao.php');

$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$senha = $_POST['senha'];

if (empty($nome) || empty($email) || empty($senha)) {
    echo "<script>
        alert('Preencha todos os campos!');
        window.location.href='cadastro.php';
    </script>";
    exit;
}

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Erro na preparação: " . $conn->error);
}

$stmt->bind_param("sss", $nome, $email, $senha_hash);

if ($stmt->execute()) {
    echo "<script>
        alert('Cadastro realizado com sucesso!');
        window.location.href='login.php';
    </script>";
} else {
    echo "<script>
        alert('Erro: Este e-mail já está cadastrado!');
        window.location.href='cadastro.php';
    </script>";
}

$stmt->close();
$conn->close();
?>
