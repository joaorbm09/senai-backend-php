<?php 
require_once 'Funcionario.php';

class FuncionarioPJ extends Funcionario{
    private string $cnpj;
    private string $pay;

    
    public function __construct(string $n, string $e, float $p, string $c)
    {
        parent::__construct($n, $e);
        $this->pay = $p;
        $this->cnpj = $c;
    }

    public function calcularPagamento(){
        return "\nNome: {$this->nome} \nE-mail: {$this->email}\nPagamento: {$this->pay}\nCNPJ: {$this->cnpj}\n";
    }


}

