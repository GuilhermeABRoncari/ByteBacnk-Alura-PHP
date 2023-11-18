<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Cpf;

class Pessoa
{
    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function getCpf() : string
    {
        return $this->cpf->getNumero();
    }
}