<?php

namespace Alura\Banco\Infra;

trait AcessoPropriedades
{
    public function __get(string $nomeAtributo)
    {
        $metodo = 'get' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}