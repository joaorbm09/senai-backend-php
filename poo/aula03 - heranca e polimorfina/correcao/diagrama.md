# Diagrama exericio funcionario CLT/PJ

```mermaid
classDiagram
Funcionarios <|-- FuncionarioCLT
Funcionarios <|-- FuncionarioPJ
class Funcionarios{
    <<abstract>>
    # nome
    # email
    # telefone
    # nascimento
    # salario
    # endereço
    # cargo
    # if

    + getDados()
    + calcularSalario()
}

class FuncionarioCLT{
    - cpf
    - descontos

    + getDados()
    + calularSalario
}
class FuncionarioPJ{
    - cnpj
    - horast
    - descontos

    + getDados()
    + calularSalario()
}