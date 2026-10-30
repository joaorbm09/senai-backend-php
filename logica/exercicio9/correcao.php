<?php 

// informar o que faz:
echo "este progrma recebe valores e soma todos.\n";

// criar uma lista 

$lista = [];

// receber valores do usuario até digitar 0.

do{
    // enquanto o usuario digitar um valor, receber e aidiconar a lista
    $usuario = (float) readline("\nInsira um valor ou enter para sair: ");
    array_push($lista,$usuario);

//se o usuario digitar enter (usuario vasio)
}while(!empty($usuario));

//exibir lista
print_r($lista);

//somar lista
//mostrar o resultado

echo "A soma dos valores: " . array_sum($lista). "\n";


?>