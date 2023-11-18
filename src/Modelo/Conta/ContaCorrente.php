<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Titular;
use \Exception;

class ContaCorrente extends Conta
{
    public function transferir(float $valorTransferencia, Conta $conta) : void
    {
        if ($valorTransferencia > $this->saldo) throw new Exception("Saldo insuficiente para a transferencia.");

        $this->sacar($valorTransferencia);

        $conta->depositar($valorTransferencia);
    }
    
    protected function percentualTarifa() : float
    {
        return 0.05;
    }
}