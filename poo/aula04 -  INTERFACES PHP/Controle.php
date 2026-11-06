<?php 
require_once 'ControleInterface.php';
//criando a classe cotrole
class Controle implements ControleInterface {
//atributos
private bool $status;
private int $volume;
private int $canal;

//metodos
public function __construct()
{
    $this->status = false;
    $this->volume = 30;
    $this->canal = 500;
}


#[Override]
public function io(){
    if($this->status){
        echo "Desligando";
        sleep(2);
    }else{
        echo "\nseja bem-vindo";
        sleep(2);
        $this->status = true;
    }
}

#[Override]
public function aumentaV()
{
    if($this->volume < 100){
        return $this->volume+=1;
    }else{
        return "volume maximo";
    }
    
}
    
#[Override]
public function abaixaV()
{
    if($this->volume > 0){
        return $this->volume-=1;
    }else{
        return "Já está mudo";
        }
        
        }
#[Override]
public function mudo()
{
    if($this->volume > 0){
        return "mudo";
        $this->volume=0;
    }else{
        $this->volume = 30;
    }
}

#[Override]
public function maisCanal()
{
    if($this->canal < 999){
        $this->canal+=1;
        return $this->canal; 
    }else{
        $this->canal = 1;
        return $this->canal;
        }
    }
    
#[Override]
public function menosCanal()
{
    if($this->canal > 1){
        $this->canal-=1;
        return $this->canal;
    }else{
        $this->canal = 500;
        return $this->canal;
    }
    }
    
#[Override]
public function menu()
{
    return "
    Ligado: " . ($this->status ? "Ligado":"Desligado"). "
    Volume: {$this->volume} 
    Canal: {$this->canal}" ;
}
}
?>