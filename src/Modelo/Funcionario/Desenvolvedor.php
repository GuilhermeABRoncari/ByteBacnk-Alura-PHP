<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeNivel() : void
    {
        $this->recepeAumento($this->getSalario() * 0.75);
    }
}