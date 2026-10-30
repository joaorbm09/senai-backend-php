<?php 
require_once 'Cliente.php';

class ClientePF extends Cliente{
    private string $cpf;

    
    public function __construct(string $n, string $e,string $c)
    {
        parent::__construct($n, $e);
        $this->cpf = $c;
    }

    public function getDados(){
        return "Nome: {$this->nome} \nE-mail: {$this->email}\nCPF: {$this->cpf}";
    }


}

$cpf = new ClientePF("joao","joao@gmail.com","419.853.728-35");
echo $cpf->getDados();
?>