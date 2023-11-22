<?php

namespace Alura\Banco\Modelo\Conta;

use \Exception;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\SaldoInsuficienteException;
use InvalidArgumentException;

abstract class Conta 
{
    private Titular $titular;
    protected float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular)
    { 
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function getTitular(): Titular
    {
        return $this->titular;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function sacar(float $valorASacar) : void
    {
        $valorFinalDoSaque = $valorASacar + ($valorASacar * $this->percentualTarifa());

        if ($valorFinalDoSaque > $this->saldo) throw new SaldoInsuficienteException($valorASacar, $this->saldo);
        
        $this->saldo -= $valorFinalDoSaque;
    }

    public function depositar(float $valorADepositar) : void
    {
        if ($valorADepositar < 0) throw new InvalidArgumentException("Não se pode depositar valores negativos.");

        $this->saldo += $valorADepositar;
    }

    public static function totalDeContasCriadas() : int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa() : float;
}
