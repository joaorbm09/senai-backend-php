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

    public function calcularPagamento(){
        return "\nNome: {$this->nome} \nE-mail: {$this->email}\nCPF: {$this->cpf}\n Pagamento: {$this->pay}";
    }


}


