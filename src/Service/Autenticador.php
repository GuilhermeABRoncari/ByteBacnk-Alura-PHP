<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;
use \Exception;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha) : void
    {
        if (!$autenticavel->podeAutenticar($senha)) throw new Exception("Senha incorreta.");
        echo 'Usuario logado no sistema.' . PHP_EOL;
    }
}