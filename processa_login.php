<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "SELECT id, nome, senha FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
         $row = $result->fetch_assoc();
        
        if (password_verify($senha, $row['senha'])) {//senha correta
            
            $_SESSION['id_usuario'] = $row['id'];
            $_SESSION['nome_usuario'] = $row['nome'];
            
            header("Location: index.php"); 
            exit();
            
        } else {
            $erro = "Senha incorreta!";
        }
    } else {
        $erro = "E-mail não encontrado!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Erro no Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2 style="color: red">Erro de Acesso</h2>
        <?php if(isset($erro)) echo "<p>$erro</p>"; ?>
        <br>
        <a href="login.php" class="button">Tentar Novamente</a>
    </div>
</body>
</html>
