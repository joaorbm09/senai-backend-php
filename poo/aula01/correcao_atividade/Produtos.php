<?php 
//Cria a classe Produto
class Produto{
    //Atributos
    public $nome;
    public $preco;

    //Métodos
    public function mostrarProduto(){
        echo "\nProduto: {$this->nome}\n";
        echo "Preço R$: {$this->preco}\n";
    }
}
//Instanciando (Criando um objeto) a classe Produto
$p1 = new Produto;
//Atribuindo os atributos da classe
$p1->nome = "Mouse";
$p1->preco = 10;
//Chamando um método
$p1->mostrarProduto();

//Instanciando (Criando um objeto) a classe Produto
$p2 = new Produto;
//Atribuindo os atributos da classe
$p2->nome = "Teclado";
$p2->preco = 23;
//Chamando um método
$p2->mostrarProduto();
?>