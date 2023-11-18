<?php

class Cpf
{
    private string $numero;

    public function __construct(string $numero)
    {
        $this->numero = $this->validaCpf($numero);
    }

    private function validaCpf(string $numero) : string
    {
        $regexCpf = '/^\d{3}\.\d{3}\.\d{3}-\d{2}$/';
        if (!preg_match($regexCpf, $numero)) throw new Exception("CPF: $numero é invalido.");
        return $numero;
    }

    public function getNumero() : string
    {
        return $this->numero;
    }
}