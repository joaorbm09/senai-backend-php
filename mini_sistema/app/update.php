<?php 
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    <main>
        <br>
        <form action="" method="post">
            <label for="id">ID: </label>
            <input type="number" name="id" id="id" placeholder="Insira ID para atualizar" required>



            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome"><br>

            <label for="turma">Turma: </label>
            <input type="text" name="turma" id="turma"><br>

            <label for="email">Email: </label>
            <input type="email" name="email" id="email"><br>

            <label for="nasc">Nascimento: </label>
            <input type="date" name="nascimento" id="nascimento"><br>
            <br>
            <label for="ativo">Ativo?</label><br>
            <input type="radio" name="ativo" id="ativo" value="true">
            
            <label for="ativo">Sim!</label>
            <input type="radio" name="ativo" id="ativo" value="false">
            <label for="ativo">Não!</label><br>

            <br><input type="submit" value="Atualizar">
            <input type="reset" value="Limpar">
        
        </form>

        <?php 
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
        atualizar($conexao, $_POST['id'], $_POST['nome'], $_POST['turma'], $_POST['nascimento'], $_POST['ativo'], $_POST['email']);
        }
        ?>
        
    </main>
    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>