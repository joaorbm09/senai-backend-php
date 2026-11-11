<?php 
require_once 'ControleRepository.php';
//criando a classe controle
class Controle extends ControleRepository{
//atributos
protected bool $status;
protected int $volume;
protected int $canal;

//metodos
public function __construct()
{
    $this->status = false;
    $this->volume = 30;
    $this->canal = 500;
}
}
?>
