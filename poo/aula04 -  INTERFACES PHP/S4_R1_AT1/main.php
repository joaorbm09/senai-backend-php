<?php
require_once 'FuncionarioClt.php';
require_once 'FuncionarioPJ.php';

$clt = new FuncionarioClt(
    'Ana Souza',
    '11999990000',
    '1995-04-12',
    3500.00,
    'Rua das Flores, 100',
    'Analista',
    250.00,
    '12345678900',
    '123456789'
);

$pj = new FuncionarioPJ(
    'Bruno Lima',
    '11988880000',
    '1990-09-25',
    80.00,
    'Avenida Central, 200',
    'Desenvolvedor',
    10.00,
    '12345678000199',
    160.00
);

echo $clt->getDados();
echo 'Salario liquido: ' . $clt->calcularSalario() . "\n";
echo $clt->contratar() . "\n";
echo $clt->demitir() . "\n\n";

echo $pj->getDados();
echo $pj->calcularSalario();
echo $pj->contratar() . "\n";
echo $pj->demitir() . "\n";