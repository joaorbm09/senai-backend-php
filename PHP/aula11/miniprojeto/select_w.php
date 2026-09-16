<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar aluno</title>
</head>
<body>
    <h1>Buscar aluno por ID</h1>
    <form action="" method="post">
        <label for="id">ID: </label>
        <input type="number" name="id" id="id" required><br>
        <input type="submit" value="Buscar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        require_once 'connect.php';
        
        $sql = "SELECT nome, turma, nascimento, ativo FROM alunos WHERE id =:id";
        try{
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(":id", $_POST['id']);
            $stmt->execute();
            
            $aluno = $stmt->fetch(PDO::FETCH_ASSOC);
            echo "Aluno: {$aluno['nome']}<br>";
            echo "Aluno: {$aluno['turma']}<br>";
            echo "Aluno: {$aluno['nascimento']}<br>";
            echo "Aluno: {$aluno['ativo']}<br>";
            } catch (PDOException $e) {
                echo "Erro: ". $e->getMessage();
                }
        } 
    ?>
</body>
</html>