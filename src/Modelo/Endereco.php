<?php

namespace Alura\Banco\Modelo;
use Alura\Banco\Infra\AcessoPropriedades;

class Endereco
{
    use AcessoPropriedades;
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function __toString() : string
    {
        return "Rua: {$this->rua}, Numero: {$this->numero}, Bairro: {$this->bairro}, Cidade: {$this->cidade}";
    }

}