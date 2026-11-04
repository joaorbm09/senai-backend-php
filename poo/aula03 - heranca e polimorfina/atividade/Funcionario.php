<?php
class Funcionario {
    protected string $nome;
    protected string $email;


    public function __construct($n, $e,)
    {
        $this->nome = $n;
        $this->email = $e;
    }

    public function getDados(){
        return "Nome: {$this->nome} \nE-mail: {$this->email} \n";
    }

    public function calcularPagamento(): float
{
    return 0.0;
}
}