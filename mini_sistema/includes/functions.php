<?php 
require_once '../database/connect.php';

function cadastrar($conexao, $nome, $turma, $nasc, $ativo, $email){
        $sql = "INSERT INTO  alunos (nome, turma, nascimento, ativo, email) VALUES(:nome, :turma, :nascimento, :ativo, :email)";
        try{
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":turma", $turma);
            $stmt->bindParam(":nascimento", $nasc);
            $stmt->bindParam(":ativo", $ativo);
            $stmt->bindParam(":email", $email);

            $stmt->execute();
            echo "aluno inserido com sucesso!";

        } catch(PDOException $e) {
            echo "Erro: ". $e->getMessage();

        }
}
?>