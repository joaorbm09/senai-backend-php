<?php 
require_once 'connect.php';

$sql = "DELETE FROM  alunos WHERE id =:id";
$id = 1;
try{
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id" ,$id);
    $stmt->execute();
}catch (PDOException $e) {
    echo "Erro: ". $e->getMessage();
}

?>