<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar aluno</title>
</head>
<body>
    <h1>Cadastrar aluno</h1>

    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="turma">Turma: </label>
        <input type="text" name="turma" id="turma" required><br>

        <label for="nascimento">Nascimento: </label>
        <input type="date" name="nascimento" id="nascimento" required><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required><br>

        <label for="ativo">Ativo: </label>
        <select name="ativo" id="ativo">
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select><br>

        <input type="submit" value="Cadastrar">
    </form>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            require_once "connect.php";
            
            $sql = "INSERT INTO  alunos (nome, turma, nascimento, ativo, email) VALUES(:nome, :turma, :nascimento, :ativo, :email)";
            try{
                $stmt->bindParam(":nome", $_POST['nome']);
                $stmt->bindParam(":turma", $_POST['turma']);
                $stmt->bindParam(":nascimento", $_POST['nascimento']);
                $stmt->bindParam(":ativo", $_POST['ativo']);
                $stmt->bindParam(":email", $_POST['email']);
                
                $stmt->execute();
                echo "aluno inserido com sucesso!";
                
                } catch(PDOException $e) {
                    echo "Erro: ". $e->getMessage();
                
                }
        }
    ?>
</body>
</html>
