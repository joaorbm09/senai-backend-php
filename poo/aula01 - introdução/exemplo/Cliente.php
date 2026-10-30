<?php
require_once 'index.php';

class Cliente{
    //atributos
    public string $nome;
    public int $idade;
    public float $peso;

    public function __construct($nome, $idade, $peso){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->cadastrar();
    }

    public function cadastrar(){
        echo "Cliente {$this->nome} cadastrado com sucesso!\n<br>";
    }
    public function mostrarDados(){
        echo "Dados clientes\n<br>";
        echo "Nome: <br>" . $this->nome . "\n";
        echo "Idade: <br>" . $this->idade . "\n";
        echo "Peso: <br>" . $this->peso . "\n";
    }

}
?>
