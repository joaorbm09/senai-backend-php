<?php 
class UsuarioModel{
    public function listarTodos(){
        return[
            ['id'=>1, 'nome'=> 'Joao', 'email' => 'joao@gmail.com'],
            ['id'=>2, 'nome'=> 'henrique', 'email' => 'henrique@gmail.com'],
            ['id'=>3, 'nome'=> 'kaun', 'email' => 'kaun@gmail.com'],
            ['id'=>4, 'nome'=> 'Jh', 'email' => 'jh@gmail.com']
        ];
    }
}
?>