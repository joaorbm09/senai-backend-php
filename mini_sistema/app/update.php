<?php 
require_once "connect.php";

$n_nome = 'Roberto';
try{
$sql = "UPDATE alunos SET nome = :nome WHERE id = :id ";

$stmt = $conexao->prepare($sql);
$stmt->bindParam(":nome", $n_nome);
$stmt->bindParam(":id", $id);
$stmt->execute();
echo "Registro Atualizado ";
} catch (PDOException $e) {
    echo "Erro: ". $e->getMessage();
}
?>