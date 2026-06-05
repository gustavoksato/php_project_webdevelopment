<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu site - Página inicial</title>
    
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <h1> ACESSO RESTRITO </h1>
            <br> 
            <h2> Realize o seu login </h2>
        </div>
    </header>
    <form action="processa_login.php" method="POST">
    <div class="form-group"> 
            <label for="email"> EMAIL </label>
            <input type="email" id="email" name="email" placeholder="Digite seu email:" required>
        </div>
    <div class="form-group"> 
            <label for="senha"> SENHA </label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha:" required>
        </div>
        <button type="submit" class="button"> Entrar </button>

    </form>
    <br>
    <p> Ainda não tem conta? Cadastra-se aqui: <a href="form.php"> AQUI!!! </a> </p>

</body> 
</html>