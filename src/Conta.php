<?php

require_once 'src/Cpf.php';

class Conta 
{
    private Titular $titular;
    private float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $cliente)
    { 
        $this->titular = $cliente;
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
        if ($valorASacar > $this->saldo) throw new Exception("Saldo insuficiente.");
        
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar) : void
    {
        if ($valorADepositar < 0) throw new Exception("Não se pode depositar valores negativos.");

        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorTransferencia, Conta $conta) : void
    {
        if ($valorTransferencia > $this->saldo) throw new Exception("Saldo insuficiente para a transferencia.");

        $this->sacar($valorTransferencia);

        $conta->depositar($valorTransferencia);
    }

    public static function totalDeContasCriadas() : int
    {
        return self::$numeroDeContas;
    }
}
