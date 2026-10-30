<?php

// Cria a classe Produto:
class Produto
{
    // Atributos privados (encapsulamento):
    private $nome;
    private $preco;

    // Método Construtor:
    public function __construct($n, $p)
    {
        $this->nome = $n;
        $this->preco = $p;
    }

    // Metodos acessores (Getter e Setter) para nome:
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($n)
    {
        $this->nome = $n;
    }

    // Metodos acessores (Getter e Setter) para preço:
    public function getPreco()
    {
        return $this->preco;
    }
    public function setPreco($p)
    {
        $this->preco = $p;
    }

    // Método para exibir dados do produto:
    public function mostrarProduto()
    {
        echo "Dados do Produto:\n";
        echo "Nome: {$this->nome}\n";
        echo "Preço: R$ {$this->preco}\n";
    }
}


$p1 = new Produto("Garrafa Térmica", 49.90);
$p1->mostrarProduto();

$p2 = new Produto("Calculadora Científica", 89.00);
$p2->mostrarProduto();

?>