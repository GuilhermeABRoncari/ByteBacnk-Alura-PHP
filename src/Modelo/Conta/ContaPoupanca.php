<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Titular;
use \Exception;

class ContaPoupanca extends Conta
{
    protected function percentualTarifa() : float
    {
        return 0.03;
    }
}