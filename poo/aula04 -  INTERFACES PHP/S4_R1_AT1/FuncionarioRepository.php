<?php
require_once 'FuncionarioInterface.php';

abstract class FuncionarioRepository implements FuncionarioInterface
{
    protected bool $status = false;

    abstract public function contratar(): string;

    abstract public function demitir(): string;

    protected function contrato(bool $contratar, string $nome, string $servico): string
    {
        if ($this->status === $contratar) {
            $situacao = $contratar ? 'já está contratado' : 'não está contratado';
            return "{$nome} {$situacao} como {$servico}.";
        }

        $this->status = $contratar;

        if ($contratar) {
            return "{$nome} contratado(a) como {$servico}.";
        }

        return "{$nome} desligado(a) do serviço {$servico}.";
    }
}