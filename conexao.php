<?php
$host = 'localhost';
$usuario = 'root';
$senha_db = 'senac';
$banco = 'supermercado_online';

$conn = new mysqli($host, $usuario, $senha_db, $banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
