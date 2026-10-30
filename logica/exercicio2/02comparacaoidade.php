<?php 
// 2. Comparações de números: Crie um programa que peça ao usuário para inserir dois números e diga qual deles é maior, ou se são iguais.  

// diga o que o programa faz: O programa identifica qual numero é maior

// pergunte ao usuario quais numeros ele quer comparar (inserir)
echo"\nDigite dois numeros\n";

// usuario insere dois numeros
$num1 = (float) readline("\nIsere o primeiro numero: ");
$num2 = (float) readline("\nIsere o segundo numero: ");
// se o primeiro numero for maior que o segundo 
if ($num1 > $num2){
    echo "$num1, é maior que $num2\n";
}
// se senao o segundo numero é maior que o primeiro
elseif ($num2 > $num1){
    echo "$num2, é maior que $num1\n";
}
// senao o os dois numeros são iguais
else{
    echo "os dois numeros são iguais";
}
?>