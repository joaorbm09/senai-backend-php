<?php 
// Tabuada de um número: Crie um programa que peça ao usuário para inserir um número e imprima a tabuada desse número.

// o que esse programa faz: ele cria uma tabuada a partir do que o usuario pedir

// pergunte ao usuario um numero para uma tabuada

echo "Digite um numero para uma tabuada!\n";

// receber a tabuada

$num = (int) readline ("Digite o seu numero: ");

// receber ate:

$ate = readline("\nAté: ");

// exbir tabuada

echo "Sua tabuada é:\n";

// imprimir a tabuada

for ($i = 1; $i <=$ate; $i++){
    $resultado = $num * $i;
    echo "\n $num x $i = $resultado\n";
}
?>