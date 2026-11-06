<?php 
require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

$clt = new FuncionarioCLT("João", "123456789", "01/01/1990", 3000.00, "Rua A, 123", "Desenvolvedor", "123.456.789-00", 200.00, "123456789");
echo $clt->getDados();
echo "Salario bruto R$: {$clt->getSalario()} \nSalario liquido R$: {$clt->calcularSalario()}";

$pj = new FuncionarioPJ("Maria", "987654321", "02/02/1992", 50.00, "Rua B, 456", "Designer", "12.345.678/0001-99", 160, 10);
echo $pj->getDados();
echo "Salario bruto R$: {$pj->getSalario()} \nSalario liquido R$: {$pj->calcularSalario()}";
?>