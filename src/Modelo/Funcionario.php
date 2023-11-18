<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\{Cpf, Pessoa};

class Funcionario extends Pessoa
{
    private string $funcao;

    public function __construct(string $nome, Cpf $cpf, string $funcao)
    {
        parent::__construct($nome, $cpf);
        $this->funcao = $funcao;
    }

    public function getFuncao(): string
    {
        return $this->funcao;
    }

    public function alteraNome(string $nome) : void
    {
        $this->nome = $nome;
    }
}