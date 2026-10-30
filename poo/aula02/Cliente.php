<?php
// Cria a classe cleinte:
class Cliente
{
    // atributos:
    private $nome;
    private $email;
    private $cpf;

    // metodos:

    public function __construct($n, $c){
        $this->nome = $n;
        $this->cpf = $c;

    }
    // metodos acessores (Getter e setter)para nome:
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($n)
    {
        $this->nome = $n;
    }

    // metodos acessores (Getter e setter)para email:
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($e)
    {
        $this->email = $e;
    }

    // metodos acessores (Getter e setter)para cpf:
    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf($c)
    {
        $this->cpf = $c;
    }

    public function mostrarDados(){
        echo "Dados do Cliente: \n";
        echo "Nome: {$this->nome}\n";
        echo "Email: {$this->email}\n";
        echo "Cpf: {$this->cpf }\n";
    }
}


$c1 = new Cliente("joao", "419.853.728-35");
$c1->setEmail("joao@gmail.com");
$c1->mostrarDados();

