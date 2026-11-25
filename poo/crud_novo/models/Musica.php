<?php

class Musica {
	private $nome;
	private $minutagem;
	private $autor;
	private $link;

	public function __construct($nome, $minutagem, $autor, $link) {
    	$this->nome = $nome;
    	$this->minutagem = $minutagem;
    	$this->autor = $autor;
    	$this->link = $link;
	}

	public function getNome() { return $this->nome; }
	public function getMinutagem() { return $this->minutagem; }
	public function getAutor() { return $this->autor; }
	public function getLink() { return $this->link; }
}
?>
