<?php 
//Contagem regressiva: Crie um programa que faça uma contagem regressiva de 10 até 1.

// o que o programa faz: o programa cria uma lista de tras para frente 10 a 1

// mostrar uma lista de 10 a 1

echo "Essa é uma lista de numeros de 10 a 1:\n";

// listar os numeros de 10 a 1

for ($i = 10; $i >= 1; $i--){
    echo "Contagem regressiva: $i\n";
    sleep(1);
}
?>