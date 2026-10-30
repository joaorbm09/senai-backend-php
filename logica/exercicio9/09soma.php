<?php 
// Soma dos números em uma lista: Crie um programa que some todos os números em uma lista.

// o que esse programa faz: ele ira somar todos os numeros de uma lista

// perguntar ao usuario dois numeros para começar a lista e terminar

$inicio = (int) readline ("\nDigite um numero para começar a lista: \n");
$final = (int) readline ("\nDigite um outro numero para finalizar a lista: \n");

// criar lista solicitada pelo usuario

$numeros = range($inicio,$final);
$soma = 0;

foreach ($numeros as $numeros) {
    $soma += $numeros;
}

// exibir o resultado

echo "A soma de $inicio até $final é: $soma\n"

?>
