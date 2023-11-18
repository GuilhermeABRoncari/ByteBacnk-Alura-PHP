<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\{Cpf, Endereco, Pessoa};

class Titular extends Pessoa
{
    private Endereco $endeco;

    public function __construct(string $nome, Cpf $cpf, Endereco $endeco)
    {
        parent::__construct($nome, $cpf);
        $this->endeco = $endeco;
    }

    public function getEndereco() : Endereco
    {
        return $this->endeco;
    }

}