<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu site - Página inicial</title>
    
    <link rel="stylesheet" href="css/style.css">
    <script src="js/receiver.js" defer></script>
</head>

<body>
<header>
    <nav class="sidebar a">
        <ul class="ul"> <strong>
            <li class="a"> <a href="index.php"> INÍCIO </a> </li>
            <li class="a"> <a href="form.php"> FORMULÁRIO </a></li>
            <li class="a"> <a href="about.php"> SOBRE</a></li>
            <li class="a"> <a href="perfil.php"> MINHA CONTA </a> </li>
        </ul> </strong>
    </nav>
</header>

<div class="container">
    <h2> FORMULÁRIO DE CADASTRO </h2>
    <p> Preencha os dados abaixo </p>
    <br>

    <form action="cadastro.php" method="POST" onsubmit="return validarFormulario()">
        
        <div class="form-group"> 
            <label for="email"> EMAIL </label>
            <input type="email" id="email" name="email" placeholder="Digite seu email:" required>
        </div>
        
        <div class="form-group"> 
            <label for="senha"> SENHA </label>
            <input type="password" id="senha" name="senha" placeholder="Crie uma senha:" required>
        </div>
        
        <div class="form-group"> 
            <label for="nome"> NOME </label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome:" required>
        </div>

        <div class="form-group"> 
            <label for="alga"> Qual seu tipo de alga favorito? </label>
            <select id="alga" name="alga" required>
                <option value="1"> rodophytas </option>
                <option value="2"> clorophytas </option>
                <option value="3"> diatomáceas </option>
                <option value="4"> dinoflagelados </option>
                <option value="5"> phaeophytas </option>
            </select>
        </div>
        
        <button type="submit" class="button"> Enviar dados! </button>
    </form> </div>

<footer>
    <div class="container"> 
        <p> 2025 - Desenvolvimento Web - Atividade somativa </p>
    </div>
</footer>

</body> </html>