<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Musica.php';
require_once __DIR__ . '/../interfaces/RepositoryInterface.php';

class MusicaRepository implements RepositoryInterface {

	private $conn;

	public function __construct() {
    	$this->conn = Database::conectar();
	}

	public function criar($musica) {
    	$sql = "INSERT INTO musicas (nome, minutagem, autor, link) VALUES (:n, :m, :a, :l)";
    	$stmt = $this->conn->prepare($sql);
    	$stmt->execute([
        	':n' => $musica->getNome(),
        	':m' => $musica->getMinutagem(),
        	':a' => $musica->getAutor(),
        	':l' => $musica->getLink()
    	]);
	}

	public function listar() {
    	$stmt = $this->conn->query("SELECT * FROM musicas ORDER BY id");
    	return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function buscarPorId($id) {
    	$stmt = $this->conn->prepare("SELECT * FROM musicas WHERE id = :id");
    	$stmt->execute([':id' => $id]);
    	return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function atualizar($id, $musica) {
    	$sql = "UPDATE musicas
            	SET nome=:n, minutagem=:m, autor=:a, link=:l
            	WHERE id=:id";
    	$stmt = $this->conn->prepare($sql);
    	$stmt->execute([
        	':n'  => $musica->getNome(),
        	':m'  => $musica->getMinutagem(),
        	':a'  => $musica->getAutor(),
        	':l'  => $musica->getLink(),
        	':id' => $id
    	]);
	}

	public function excluir($id) {
    	$stmt = $this->conn->prepare("DELETE FROM musicas WHERE id = :id");
    	$stmt->execute([':id' => $id]);
	}
}
?>
