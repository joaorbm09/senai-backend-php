<?php 
require_once 'Cliente.php';

class ClientePJ extends Cliente{
    private string $cnpj;

    
    public function __construct(string $n, string $e,string $c)
    {
        parent::__construct($n, $e);
        $this->cnpj = $c;
    }

    public function getDados(){
        return "Nome: {$this->nome} \nE-mail: {$this->email}\nCNPJ: {$this->cnpj}";
    }


}

$cnpj = new ClientePJ("joao","joao@gmail.com","419.853.728-35");
echo $cnpj->getDados();
?>