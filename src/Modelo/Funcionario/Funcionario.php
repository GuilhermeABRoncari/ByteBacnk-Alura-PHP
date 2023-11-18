<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Cpf, Pessoa};
use \Exception;

abstract class Funcionario extends Pessoa
{
    private string $funcao;
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, string $funcao, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->funcao = $funcao;
        $this->salario = $salario;
    }

    public function getFuncao(): string
    {
        return $this->funcao;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function alteraNome(string $nome) : void
    {
        $this->nome = $nome;
    }

    public function calculoDeBonificacao() : float
    {
        return $this->salario * 0.1;
    }

    public function recepeAumento(float $valorAumento) : void
    {
        if ($valorAumento < 0) throw new Exception("Aumento deve ser positivo.");

        $this->salario += $valorAumento;
    }
}