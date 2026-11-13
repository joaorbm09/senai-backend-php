<?php 
//cria classe cliente
class Cliente{
    private string $nome;
    private string $email;
    private $documento;
    public function __construct($nome, $email, $documento)
    {
        $this->nome = $nome;
        $this->nome = $email;
        $this->nome = $documento;
    
    }
    

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }


    /**
     * Get the value of documento
     */ 
    public function getDocumento()
    {
        return $this->documento;
    }
}

?>