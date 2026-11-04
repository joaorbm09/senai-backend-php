<?php 
require_once 'Funcionario.php';

class FuncionarioCLT extends Funcionario{
    private string $cpf;
    private float $pay;

    
    public function __construct(string $n, string $e, float $p, string $c)
    {
        parent::__construct($n, $e,);
        $this->cpf = $c;
        $this->pay = $p; 
    }

    public function getDados(): string
    {
        return parent::getDados() . "CPF: {$this->cpf}\n";
    }

    public function calcularPagamento(): float
    {
        return $this->pay;
    }
}

