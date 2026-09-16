<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
</head>
<body>
    <h1>Lista de Alunos</h1>
    <?php 
    require_once "connect.php";

    $sql = "SELECT * FROM alunos";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->execute();

        $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($alunos as $aluno) {
            echo "ID: {$aluno['id']}<br>";
            echo "nome: {$aluno['nome']}<br>";
            echo "turma: {$aluno['turma']}<br>";
            echo "email: {$aluno['email']}<br>";
            echo "ativo: {$aluno['ativo']}<br><br>";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
    ?>
</body>
</html>