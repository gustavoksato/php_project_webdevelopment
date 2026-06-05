<?php
session_start();
include 'conexao.php';

if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION['id_usuario'];
    $nome = $_POST['nome'];
    $alga = $_POST['alga'];

    $sql = "UPDATE usuarios SET nome = '$nome', id_alga = '$alga' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['nome_usuario'] = $nome;
        
        echo "<script>
                alert('Dados atualizados com sucesso!');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>