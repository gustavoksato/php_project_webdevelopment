<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit();
}
include 'conexao.php';

$id = $_SESSION['id_usuario'];
//busca atuais
$sql = "SELECT * FROM usuarios WHERE id = $id";
$result = $conn->query($sql);
$usuario = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minha Conta</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        function confirmarExclusao() {
            return confirm("Tem certeza que deseja apagar sua conta? Essa ação não pode ser desfeita!");
        }
    </script>
</head>
<body>
    <header>
        <div class="container">
            <nav class="sidebar a">
                <ul class="ul"> <strong>
                    <li class="a"> <a href="index.php"> INÍCIO </a> </li>
                    <li class="a"> <a href="form.php"> FORMULÁRIO </a> </li>
                    <li class="a"> <a href="about.php"> SOBRE</a> </li>
                    <li class="a"> <a href="perfil.php"> MINHA CONTA </a> </li>
                </ul> </strong>
            </nav>
            <h1> EDITAR PERFIL </h1>
        </div>
    </header>

    <div class="container">
        <h2>Meus dados</h2>
        <br>
        
        <form action="atualizar_perfil.php" method="POST">
            <div class="form-group">
                <label>E-mail (Não editável):</label>
                <input type="text" value="<?php echo $usuario['email']; ?>" disabled style="background: #ccc;">
            </div>

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required>
            </div>

            <div class="form-group"> 
                <label for="alga">Mudar Alga Favorita:</label>
                <select name="alga" required>
                    <option value="1" <?php if($usuario['id_alga'] == 1) echo 'selected'; ?>>rodophytas</option>
                    <option value="2" <?php if($usuario['id_alga'] == 2) echo 'selected'; ?>>clorophytas</option>
                    <option value="3" <?php if($usuario['id_alga'] == 3) echo 'selected'; ?>>diatomáceas</option>
                    <option value="4" <?php if($usuario['id_alga'] == 4) echo 'selected'; ?>>dinoflagelados</option>
                    <option value="5" <?php if($usuario['id_alga'] == 5) echo 'selected'; ?>>phaeophytas</option>
                </select>
            </div>
            
            <button type="submit" class="button">Salvar Alterações</button>
        </form>

        <br><hr><br>
        
        <!--  DELETE -->
        <h3 style="color: red;">Zona de Perigo</h3>
        <p>Deseja sair do sistema permanentemente?</p>
        <form action="deletar_conta.php" method="POST" onsubmit="return confirmarExclusao()">
            <button type="submit" class="button" style="background-color: darkred;">EXCLUIR MINHA CONTA</button>
        </form>

    </div>
</body>
</html>