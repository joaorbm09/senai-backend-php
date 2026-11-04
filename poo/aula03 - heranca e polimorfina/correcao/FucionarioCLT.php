<?php
//importando a class Funcionario
require_once 'Funcionario.php';
//criando a classe FuncionarioCLT 
class FuncionarioCLT extends Funcionario {
    private string $cpf;
    private float $descontos;

    public function getDados()
    {
        return "Nome: {$this->nome}\n 
        Email: {$this->email}\n 
        Teelefone: {$this->telefone}\n
        nascimento: {$this->nasc}\n
        Salario: {$this->salario}\n
        CArgo: {$this->cargo}\n
        Nif: {$this->nif}\n";
    }


    public function calcularSalario()
    {
        return "R$". $this->salario - $this->descontos,2,",",".";
    }
}
?>