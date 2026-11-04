<?php 
require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

$f[0] = new FuncionarioCLT("joao","joao@gmail.com", 4.000, "419.853.728.35");
$f[1]= new FuncionarioPJ("joao","joao@gmail.com",5.0000,"000-000-000-0001-12");

foreach($f as $funcionarios){
    echo $funcionarios->calcularPagamento();
}
?>