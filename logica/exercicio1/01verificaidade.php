<?php 
// Verificação de idade: Crie um programa que peça ao usuário para inserir a sua idade e verifique se ele é menor de idade, adulto ou idoso.  

// defina o que o programa faz: este programa verifica idade

// pergunta qual sua idade
echo "Qual a sua idade?\n";
// usuario tem que inserir sua idade

$idade = (int) readline("Digite sua idade: ");
// verifica se a idade dele for maior que 65 ele é idoso
if ($idade >= 65){
    echo "Você é um idoso\n";
}

// verifica se a idade for maior que 21 ele é adulto
elseif($idade >= 21){
    echo "Voce é um adulto!\n";
}

// verifica se a idade for menor que 21 ele é uma criança
 
else{
    echo "Voce é uma criança\n";
}
?>