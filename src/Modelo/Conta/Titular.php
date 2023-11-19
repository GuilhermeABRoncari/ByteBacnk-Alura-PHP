<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\{Cpf, Endereco, Pessoa};
use Alura\Banco\Modelo\Autenticavel;

class Titular extends Pessoa implements Autenticavel
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

    public function podeAutenticar(string $senha) : bool
    {
        return $senha === 'abcd';
    }

}