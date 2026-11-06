<?php 
//importando a classe mae
require_once 'Funcionario.php';

//criando a classe FuncionarioPJ

class FuncionarioPJ extends Funcionario{
    private string $cnpj;
    private float $horast;
    private string $descontos;

    public function __construct(string $nome, string $telefone, string $nasc, float $salario, string $endereco, string $cargo, string $cnpj, float $horast, float $descontos)
    {
        parent::__construct($nome, $telefone, $nasc, $salario, $endereco, $cargo, $descontos);
        $this->cnpj = $cnpj;
        $this->horast = $horast;
    }

    #[Override]
    public function getDados(){
        parent::getDados();
        return "Nome: {$this->nome}\n 
        Teelefone: {$this->telefone}\n
        Endereço: {$this->endereco}\n
        nascimento: {$this->nasc}\n
        HOras trabalhadas: {$this->horast}\n
        CNPJ: {$this->cnpj}\n
        Salario: {$this->salario}\n
        Descontos: {$this->descontos}\n
        Cargo: {$this->cargo}\n";
    }

    public function calcularSalario(){
            $vb = $this->salario * $this->horast;
            $vl = $vb - ($vb - ($vb * $this->descontos / 100));
            parent::calcularSalario();
            return "Valor hora: {$this->salario}\n"
                . "Horas trabalhadas: {$this->horast}\n"
                . "Valor bruto: {$vb}\n"
                . "Valor liquido: {$vl}\n";
    }


}

?>