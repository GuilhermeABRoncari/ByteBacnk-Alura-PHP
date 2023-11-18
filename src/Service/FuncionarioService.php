<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\{Funcionario};

class FuncionarioService
{
    private float $totalBonificacoes = 0;

    public function adicionaBonificacaoAo(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculoDeBonificacao();
    }

    public function getTotalBonificacoes() : float
    {
        return $this->totalBonificacoes;
    }
}