<?php
//importando a class Funcionario
require_once 'Funcionario.php';
//criando a classe FuncionarioCLT 
class FuncionarioCLT extends Funcionario {
    private string $cpf;
    private float $descontos;
    private string $nif;
    
    public function __construct(string $nome, string $telefone, string $nasc, float $salario, string $endereco, string $cargo, string $cpf, float $descontos, string $nif)
    {
        parent::__construct($nome, $telefone, $nasc, $salario, $endereco, $cargo);
        $this->cpf = $cpf;
        $this->descontos = $descontos;
        $this->nif = $nif;
    }

    public function getDados()
    {
        return "Nome: {$this->nome}\n 
        Teelefone: {$this->telefone}\n
        nascimento: {$this->nasc}\n
        Salario: {$this->salario}\n
        Cargo: {$this->cargo}\n
        CPF: {$this->cpf}\n
        Nif: {$this->nif}\n";
    }


    public function calcularSalario()
    {
        return "R$". number_format($this->salario - $this->descontos, 2, ",", ".");
    }
    
}
?>