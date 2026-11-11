<?php
require_once 'Funcionario.php';

class FuncionarioPJ extends Funcionario
{
    private string $cnpj;
    private float $horasTrabalhadas;

    public function __construct(
        string $nome,
        string $telefone,
        string $nascimento,
        float $valorHora,
        string $endereco,
        string $cargo,
        float $descontos,
        string $cnpj,
        float $horasTrabalhadas
    ) {
        parent::__construct($nome, $telefone, $nascimento, $valorHora, $endereco, $cargo, $descontos);
        $this->cnpj = $cnpj;
        $this->horasTrabalhadas = $horasTrabalhadas;
    }

    public function getDados(): string
    {
        return parent::getDados()
            . "CNPJ: {$this->cnpj}\n"
            . "Horas trabalhadas: {$this->horasTrabalhadas}\n"
            . "Desconto: {$this->descontos}%\n";
    }

    public function calcularSalario(): string
    {
        $valorBruto = $this->salario * $this->horasTrabalhadas;
        $valorLiquido = $valorBruto - ($valorBruto * $this->descontos / 100);

        return "Valor hora: R$ " . number_format($this->salario, 2, ',', '.') . "\n"
            . "Horas trabalhadas: {$this->horasTrabalhadas}\n"
            . "Valor bruto: R$ " . number_format($valorBruto, 2, ',', '.') . "\n"
            . "Valor liquido: R$ " . number_format($valorLiquido, 2, ',', '.') . "\n";
    }

    public function contratar(): string
    {
        return $this->contrato(true, $this->nome, 'PJ');
    }

    public function demitir(): string
    {
        return $this->contrato(false, $this->nome, 'PJ');
    }
}