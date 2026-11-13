<?php 
require_once 'ControleInterface.php';

abstract class ControleRepository implements ControleInterface{
    protected bool $status;
    protected int $volume;
    protected int $canal;

    #[Override]
public function io(){
    if($this->status){
        echo "Desligando\n";
        sleep(2);
        $this->status = false;
    }else{
        echo "\nSeja bem-vindo!\n";
        sleep(2);
        $this->status = true;
    }
}

#[Override]
public function aumentaV()
{
    if($this->status && $this->volume < 100){
        $this->volume += 1;
        return "Volume: {$this->volume}\n"; 
    }else{
        return "Volume maximo ou TV desligada\n";
    }
}
    
#[Override]
public function abaixaV()
{
    if($this->status && $this->volume > 0){
        $this->volume -= 1;
        return "Volume: {$this->volume}\n"; 
    }else{
        return "TV desligada ou volume no minimo\n";
    }
}

#[Override]
public function mudo()
{
    if($this->status && $this->volume > 0){
        $this->volume = 0;
        return "Mudo ativado\n";
    }else{
        return "TV no mudo ou desligada\n";
    }
}

#[Override]
public function maisCanal()
{
    if($this->status && $this->canal < 999){
        $this->canal += 1;
        return "Canal: {$this->canal}\n"; 
    }elseif($this->status && $this->canal == 999){
        $this->canal = 1;
        return "Canal: {$this->canal}\n";
    }else{
        return "TV desligada\n";
    }
}
    
#[Override]
public function menosCanal()
{
    if($this->status && $this->canal > 1){
        $this->canal -= 1;
        return "Canal: {$this->canal}\n"; 
    }elseif($this->status && $this->canal == 1){
        $this->canal = 999;
        return "Canal: {$this->canal}\n";
    }else{
        return "TV desligada\n";
    }
}
    
#[Override]
public function menu()
{
    $status = $this->status ? "Ligado" : "Desligado";
    return "\nStatus da TV \n" .
           "Status: {$status}\n" .
           "Volume: {$this->volume}\n" .
           "Canal:  {$this->canal}\n";
}
}
?>