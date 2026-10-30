<?php 
//cria a classe produto
class Produto{
    //atributos
    public $nome;
    public $preco;
    
    //metodos
    public function mostrarProduto(){
        echo "Produto: {$this->nome}\n";
        echo "Preço: {$this->preco}\n";
    }
}

//instanciando (criando um objeto) a classe Produto
$p1 = new Produto;
//atribuindo os atributos da classe
$p1->nome = "mouse";
$p1->preco = 10;
//chamando um metodo
$p1->mostrarProduto();

//instanciando (criando um objeto) a classe Produto

$p2 = new Produto;
//atribuindo os atributos da classe
$p2->nome = "teclado";
$p2->preco = 23;
//chamando um metodo
$p2->mostrarProduto();

?>