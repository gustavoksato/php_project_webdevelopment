<?php
$host = "localhost";
$usuario = "root";
$senha = ""; 
$banco = "base1";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
