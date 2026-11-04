<?php 
require_once 'Funcionario.php';

class FuncionarioPJ extends Funcionario{
    private string $cnpj;
    private float $pay;

    
    public function __construct(string $n, string $e, float $p, string $c)
    {
        parent::__construct($n, $e);
        $this->pay = $p;
        $this->cnpj = $c;
    }

    public function getDados(): string
{
    return parent::getDados() . "CNPJ: {$this->cnpj}\n";
}

public function calcularPagamento(): float
{
    return $this->pay;
}

}

