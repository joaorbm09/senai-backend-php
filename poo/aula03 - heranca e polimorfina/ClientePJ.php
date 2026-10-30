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
        return "\nNome: {$this->nome} \nE-mail: {$this->email}\nCNPJ: {$this->cnpj}\n";
    }


}

$cnpj = new ClientePJ("joao","joao@gmail.com","000-000-000-0001-12");
echo $cnpj->getDados();
?>