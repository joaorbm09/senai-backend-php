<?php
require_once 'Funcionario.php';

class FuncionarioCLT extends Funcionario
{
    private string $cpf;
    private string $nif;

    public function __construct(
        string $nome,
        string $telefone,
        string $nascimento,
        float $salario,
        string $endereco,
        string $cargo,
        string $cpf,
        float $descontos,
        string $nif
    ) {
        parent::__construct($nome, $telefone, $nascimento, $salario, $endereco, $cargo, $descontos);
        $this->cpf = $cpf;
        $this->nif = $nif;
    }

    public function getDados(): string
    {
        return parent::getDados()
            . "CPF: {$this->cpf}\n"
            . "NIF: {$this->nif}\n";
    }

    public function calcularSalario(): string
    {
        return parent::calcularSalario();
    }
}
