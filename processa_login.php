<?php
session_start();
include('conexao.php');

$email = trim($_POST['email']);
$senha = $_POST['senha'];

$sql = "SELECT id, nome, senha FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();

    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $email;
        header("Location: painel.php");
        exit;
    } else {
        echo "<script>
            alert('Senha incorreta!');
            window.location.href='login.php';
        </script>";
    }
} else {
    echo "<script>
        alert('Usuário não encontrado!');
        window.location.href='login.php';
    </script>";
}

$stmt->close();
$conn->close();
?>
