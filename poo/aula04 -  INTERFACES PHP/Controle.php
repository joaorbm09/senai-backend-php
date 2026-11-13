<?php 
require_once 'ControleRepository.php';
//criando a classe controle
class Controle extends ControleRepository{
//metodos
public function __construct()
{
    $this->status = false;
    $this->volume = 30;
    $this->canal = 500;
}
}
?>
