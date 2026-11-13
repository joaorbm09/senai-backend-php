<?php

interface FuncionarioInterface
{
    public function getDados(): string;

    public function calcularSalario(): string;

    public function demitir(): string;

    public function contratar(): string;
}
