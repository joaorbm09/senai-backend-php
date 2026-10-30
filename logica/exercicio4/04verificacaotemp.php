<?php 
//Verificação de temperatura: Crie um programa que peça ao usuário para inserir uma temperatura e verifique se está frio, agradável ou quente.

// o que o programa faz: Verifica temperatura
echo "Este programa classifica a temperatura";

// pergunta ao usario uma temperatura

echo "\nDigite uma temperatura aleatória em ºC\n";

// usuario insere uma temperatura

$temp = (int) readline("\nInsira a temperatura: ");

// se temperatura for maior que 33 graus quente

if($temp > 33 ){
    echo "Essa temperatura é quente!\n";
}

// se senao for maior que 24 agradavel
elseif($temp >= 21){
    echo "Esta agradevel!\n";
}

// senao for menor que 20 frio

elseif($temp <= 20){
    echo "Eta frio!\n";
}
?>