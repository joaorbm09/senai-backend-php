# atividade plano de aula

🔹 EXERCÍCIOS DE APROPRIAÇÃO

1. Explique a diferença entre public e private.

O que acontece se tentarmos acessar um atributo private fora da classe?
- O PHP dispara um erro fatal de compilação/execução, pois o php não tolera. Um atributo privado só pode ser acessado ou alterado por metodos que estão dentro da classe, diferentemente de um atributo publico que pode ser lido e acessado por fora.

Qual a função do construtor?

- ele vai iniciar o objeto e vai garatir que tenha todas as suas varaiveis. Além de também definir valores iniciais para atributos que não precisam vir de fora


🔹 DESAFIO PROFISSIONAL. 
2. A empresa quer validar o CPF antes de salvar.

Pergunta:
Onde essa validação deve ficar?
no formulário?
no setter?
direto no atributo?

- deve ficar no setter pois ele que vai receber o valor, verifica se esta na regra ou não. 