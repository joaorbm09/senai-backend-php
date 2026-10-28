<?php
require_once 'index.php';

class Produtos{
    //atributos
    public string $nome;
    public float $preco;

    public function __construct($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->cadastrar();
    }

    public function cadastrar(){
        echo "Produtos {$this->nome} preco cadastrado com sucesso!\n<br>";
    }
    public function mostrarDados(){
        echo "Dados clientes\n<br>";
        echo "Nome: <br>" . $this->nome . "\n";
        echo "Idade: <br>" . $this->idade . "\n";
        echo "Peso: <br>" . $this->peso . "\n";
    }

}
?>
