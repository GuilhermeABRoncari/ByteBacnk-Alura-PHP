<?php

class Cpf
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->cpf = $this->validaCpf($cpf);
    }

    private function validaCpf(string $cpf) : string
    {
        $regexCpf = '/^\d{3}\.\d{3}\.\d{3}-\d{2}$/';
        if (!preg_match($regexCpf, $cpf)) throw new Exception("CPF: $cpf é invalido.");
        return $cpf;
    }

    public function getCpf() : string
    {
        return $this->cpf;
    }
}