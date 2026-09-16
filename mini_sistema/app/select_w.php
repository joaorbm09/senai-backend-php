<?php 
require_once 'connect.php';

$id = 1;

$sql = "SELECT nome, turma, nascimento, ativo FROM alunos WHERE id =:id";
try{
$stmt = $conexao->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();

$aluno = $stmt->fetch(PDO::FETCH_ASSOC);
echo "Aluno: {$aluno['nome']}<br>";
echo "Aluno: {$aluno['turma']}<br>";
echo "Aluno: {$aluno['nascimento']}<br>";
echo "Aluno: {$aluno['ativo']}<br>";
} catch (PDOException $e) {
    echo "Erro: ". $e->getMessage();
}



?>