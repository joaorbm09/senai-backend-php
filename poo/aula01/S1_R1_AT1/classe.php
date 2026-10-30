<?php
// Eu usaria duas classes: Cliente e Funcionarios, pois cada um tem dados diferentes.
// O funcionário também poderia ter cargo e salário, e o cliente, endereço.

// Classe: é o modelo usado para criar os objetos.
class Cliente{
    // Atributos: são os dados de cada cliente.
    public string $nome;
    public int $idade;
    public string $email;

    // Construtor: é um método chamado ao criar um objeto com new.
    public function __construct($nome, $idade, $email){
        // $this é o próprio objeto. Nesse caso guarda o nome recebido no atributo dele. Indicando que um "objeto é esse atributo"
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
        $this->cadastrar();
    }

    // Métodos: são as ações do objeto, como cadastrar e mostrarDados.
    public function cadastrar(){
        echo "Cliente {$this->nome} cadastrado com sucesso!\n<br>";
    }
    public function mostrarDados(){
        echo "Dados clientes\n<br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Email: " . $this->email ;
    }

}

// Classe que representa os funcionários.
class Funcionarios{
    // Atributos: dados de cada funcionário.
    public string $nome;
    public string $email;

    public function __construct($nome,$email){
        $this->nome = $nome;
        $this->email = $email;
        $this->cadastrar();
    }

    public function cadastrar(){
        echo "Funcionario {$this->nome} cadastrado com sucesso!\n<br>";
    }
    public function mostrarDados(){
        echo "Dados funcionarios\n<br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Email: " . $this->email . "\n";
    }

}

// Classe que representa os produtos.
class Produtos{
    // Atributos: nomes e preços dos produtos.
    public string $produto1;
    public string $produto2;
    public float $preco1;
    public float $preco2;

    public function __construct($produto1, $produto2, $preco1, $preco2){
        $this->produto1 = $produto1;
        $this->produto2 = $produto2;
        $this->preco1 = $preco1;
        $this->preco2 = $preco2;
        $this->cadastrar();
    }

    public function cadastrar(){
        echo "Produto 1 {$this->produto1} cadastrado com sucesso!\n<br>";
        echo "Produto 2 {$this->produto2} cadastrado com sucesso!\n<br>";
    }
    public function mostrarProduto(){
        echo "Dados produtos<br>";
        echo "Produto 1: " . $this->produto1 . "<br>";
        echo "Preço 1: " . $this->preco1 . "<br>";
        echo "Produto 2: " . $this->produto2 . "<br>";
        echo "Preço 2: " . $this->preco2 . "<br>";
    }
}

