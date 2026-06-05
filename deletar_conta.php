<?php
session_start();
include 'conexao.php';

if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION['id_usuario'];

    $sql = "DELETE FROM usuarios WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        session_destroy(); // Destrói a sessão pois o usuário não existe mais
        echo "<script>
                alert('Sua conta foi excluída. Sentiremos saudades!');
                window.location.href = 'login.php';
              </script>";
    } else {
        echo "Erro ao deletar: " . $conn->error;
    }
}
?>