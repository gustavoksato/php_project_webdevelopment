<?php
include 'conexao.php';

$mensagem_visual = ""; // Variável para guardar o HTML da resposta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $nome  = $_POST['nome'];
    $alga  = $_POST['alga'];  // (1, 2, 3...)
    $senha = $_POST['senha'];

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, email, senha, id_alga) VALUES ('$nome', '$email', '$senha_hash', '$alga')";

   try {
        $conn->query($sql);
        
        $mensagem_visual = "
            <div style='border: 1px solid green; padding: 20px; color: green; background-color: #d4edda; border-radius: 5px;'>
                <h3>sucessooo!</h3>
                <p>O usuário <strong>$nome</strong> foi cadastrado.</p>
            </div>";

    } catch (mysqli_sql_exception $e) {
        
        if ($e->getCode() == 1062) {
            $mensagem_visual = "
                <div style='border: 1px solid orange; padding: 20px; color: #856404; background-color: #fff3cd; border-radius: 5px;'>
                    <h3>atenção!</h3>
                    <p>O e-mail <strong>$email</strong> já está cadastrado no sistema.</p>
                    <p>Tente fazer login ou use outro e-mail.</p>
                </div>";
        } else {
            $mensagem_visual = "
                <div style='border: 1px solid red; padding: 20px; color: red; background-color: #f8d7da; border-radius: 5px;'>
                    <h3>erro =:</h3>
                    <p>" . $e->getMessage() . "</p>
                </div>";
        }
    }
    
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Processamento</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>STATUS DO ENVIO</h2>
        
        <?php 
            if ($mensagem_visual != "") {
                echo $mensagem_visual;
            } else {
                echo "<p>Nenhum dado recebido.</p>";
            }
        ?>
        
        <br>
        <a href="index.php" class="button">Voltar ao início</a>
    </div>
</body>
</html>