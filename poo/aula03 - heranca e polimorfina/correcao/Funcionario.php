<?php 
//criando a classe funcionario

abstract class Funcionario{
    protected string $nome;
    protected string $telefone;
    protected $nasc;
    protected float $salario;
    protected string $endereco;
    protected string $cargo;
    protected float $desontos;

    // metodos

    public function __construct(string $nome, string $telefone, string $nasc, float $salario, string $endereco, string $cargo, float $desontos){
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->nasc = $nasc;
        $this->salario = $salario;
        $this->endereco = $endereco;
        $this->cargo = $cargo;
        $this->desontos = $desontos;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }
    
    protected function getDados(){}
    protected function calcularSalario(){}

}
?>