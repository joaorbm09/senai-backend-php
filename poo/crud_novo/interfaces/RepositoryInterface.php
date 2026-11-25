<?php

interface RepositoryInterface {
	public function criar($objeto);
	public function listar();
	public function buscarPorId($id);
	public function atualizar($id, $objeto);
	public function excluir($id);
}

