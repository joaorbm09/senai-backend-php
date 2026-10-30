<?php 
// Verificação de notas: Crie um programa que peça ao usuário para inserir sua nota em uma prova e imprima se ele foi aprovado ou reprovado (considerando que a nota mínima para aprovação é 7).


// o que o programa faz: verifica a nota do usuario

// solicitar ao usuario que digite sua nota

echo "\nDigite sua nota\n";

// o usuario insere sua nota

$nota = (float) readline("INSIRA sua nota aqui: ");

//verificar se nota é valida
if($nota > 10 || $nota < 0 ){
    echo "Nota não pode ser contabilizada";
}

// se a nota do usuario for maior que 7 ele sera aprovado

elseif ($nota >= 7){
    echo "ALUNO APROVADO";
}

// se nao ele não sera aprovado

else{
    echo "ALUNO reprovado se esforce mais!!";
}

?>