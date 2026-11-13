<?php 
require_once 'FuncionarioInterface.php';

abstract class FuncionarioRepository implements FuncionarioInterface
{
    protected bool $status = false;

    abstract public function getDados(): string;

    abstract public function calcularSalario(): string;

    public function demitir(): string
    {
        return $this->alterarStatus(false);
    }

    public function contratar(): string
    {
        return $this->alterarStatus(true);
    }

    private function alterarStatus(bool $contratado): string
    {
        if ($this->status === $contratado) {
            return $contratado
                ? "Funcionario {$this->nome} ja faz parte da empresa!\n"
                : "Funcionario {$this->nome} não faz parte da empresa!\n\n";
        }

        $this->status = $contratado;

        return $contratado
            ? "Funcionario {$this->nome} contratado com sucesso!\n"
            : "Funcionario {$this->nome} demitido com sucesso!\n\n";
    }
}