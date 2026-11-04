<?php

require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

$f[0] = new FuncionarioCLT("João","joao@gmail.com",4000,"123.456.789-00");

$f[1] = new FuncionarioPJ("João","joao@gmail.com",5000,"12.345.678/0001-90"
);

foreach ($f as $funcionario) {
    echo $funcionario->getDados();

    $valor = number_format(
        $funcionario->calcularPagamento(),2,',','.');

    echo "Pagamento: R$ {$valor}\n";
}