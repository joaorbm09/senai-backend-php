<?php
class Cliente {
    protected string $nome;
    protected string $email;

    public function __construct($n, $e)
    {
        $this->nome = $n;
        $this->email = $e;
    }

    public function getDados(){
        return "Nome: {$this->nome} \nE-mail: {$this->email}";
    }
}

?>