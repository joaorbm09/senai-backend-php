<?php 
require_once 'Controle.php';

$c = new Controle();

// Estado inicial (TV desligada)
echo $c->menu();

// Liga a TV
$c->io();
echo $c->menu();

// Testa mudo, volume e canal
echo $c->mudo();
echo $c->aumentaV();
echo $c->abaixaV();
echo $c->menu();

echo $c->maisCanal();
echo $c->menosCanal();
?>
