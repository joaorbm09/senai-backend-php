```mermaid
classDiagram
    class FuncionarioInterface {
        <<interface>>
        +contratar() string
        +demitir() string
    }

    class FuncionarioRepository {
        <<abstract>>
        #contratado: bool
        #alterarVinculo(contratar, nome, regime) string
        +contratar() string
        +demitir() string
    }

    class Funcionario {
        <<abstract>>
        #nome: string
        #telefone: string
        #nascimento: string
        #salario: float
        #endereco: string
        #cargo: string
        #descontos: float
        +getDados() string
        +calcularSalario() string
    }

    class FuncionarioClt {
        -cpf: string
        -nif: string
        +contratar() string
        +demitir() string
        +getDados() string
        +calcularSalario() string
    }

    class FuncionarioPJ {
        -cnpj: string
        -horasTrabalhadas: float
        +contratar() string
        +demitir() string
        +getDados() string
        +calcularSalario() string
    }

    FuncionarioInterface <|.. FuncionarioRepository
    FuncionarioRepository <|-- Funcionario
    Funcionario <|-- FuncionarioClt
    Funcionario <|-- FuncionarioPJ