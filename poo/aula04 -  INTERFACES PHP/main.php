<?php 
require_once 'Controle.php';

$c = new Controle();

echo $c->menu();

$c->io();
$c->menu();
$c->mudo();
$c->menu();
$c->menosCanal();
?>