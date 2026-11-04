<?php 
//criando a classe funcionario

abstract class Funcionario{
    protected string $nome;
    protected string $email;
    protected string $telefone;
    protected $nasc;
    protected float $salario;
    protected string $endereco;
    protected string $cargo;
    protected int $nif;

    // metodos

    public function __construct(string $nome, string $telefone, string $nasc, float $salario, string $endereco, string $cargo, int $nif){
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->nasc = $nasc;
        $this->salario = $salario;
        $this->endereco = $endereco;
        $this->cargo = $cargo;
        $this->nif = $nif;
    }

    protected function getDados(){}
    protected function calcularSalario(){}

}
?>