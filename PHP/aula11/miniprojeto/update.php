<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar aluno</title>
</head>
<body>
    <h1>Atualizar alunos</h1>
    <form action="" method="post">
        <label for="id">ID: </label>
        <input type="number" name="id" id="id" required><br>

        <label for="nome">Novo nome: </label>
        <input type="text" name="nome" id="nome" required><br>

        <input type="submit" value="atualizar">
    </form>


<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once "connect.php";
    
    try{
        $sql = "UPDATE alunos SET nome = :nome WHERE id = :id ";
        
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":nome", $_POST['nome']);
        $stmt->bindParam(":id", $_POST['id']);
        $stmt->execute();
        echo "Registro Atualizado ";
        } catch (PDOException $e) {
            echo "Erro: ". $e->getMessage();
            }
    }
?>
</body>
</html>