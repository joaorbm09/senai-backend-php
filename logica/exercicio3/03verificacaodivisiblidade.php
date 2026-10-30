<?php 
//Verificação de divisibilidade: Crie um programa que peça ao usuário para inserir dois números e verifique se o primeiro número é divisível pelo segundo.

// o programa faz: o programa verifica

// pedir para o usuario inserir dois numeros

echo"\nDigite dois numeros inteiros\n";

// usuario insere dois numeros

$num1 = (int) readline("\nInsere o primeiro numero: ");
$num2 = (int) readline("\nInsere o segundo numero: ");

// se o primeiro numeiro é divisivel pelo segundo

if ($num1 % $num2 == 0 ){
    echo "$num1, é divisivel pelo $num2\n";
}    

// se nao ele não sera divisivel

else{
    echo "$num1, não é divisivel por $num2\n";
}
?>