<?php 
//cria interface
interface RepositoryInterface{
    public function criar($objeto);
    public function listar();
    public function buscarPId($id);
    public function atualizar($id, $objeto);
    public function excluir($id);
}

?>