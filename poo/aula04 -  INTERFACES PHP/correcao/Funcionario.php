<?php
require_once 'FuncionarioRepository.php';

abstract class Funcionario extends FuncionarioRepository
{
    protected string $nome;
    protected string $telefone;
    protected string $nascimento;
    protected float $salario;
    protected string $endereco;
    protected string $cargo;
    protected float $descontos;

    public function __construct(
        string $nome,
        string $telefone,
        string $nascimento,
        float $salario,
        string $endereco,
        string $cargo,
        float $descontos
    ) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->nascimento = $nascimento;
        $this->salario = $salario;
        $this->endereco = $endereco;
        $this->cargo = $cargo;
        $this->descontos = $descontos;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function getDados(): string
    {
        return "Nome: {$this->nome}\n"
            . "Telefone: {$this->telefone}\n"
            . "Nascimento: {$this->nascimento}\n"
            . "Salario base: R$ " . number_format($this->salario, 2, ',', '.') . "\n"
            . "Endereco: {$this->endereco}\n"
            . "Cargo: {$this->cargo}\n";
    }

    public function calcularSalario(): string
    {
        return 'R$ ' . number_format($this->salario - $this->descontos, 2, ',', '.');
    }
}
