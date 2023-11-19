<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Alura\Banco\Modelo\Conta\{Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};
use Alura\Banco\Service\Autenticador;

$autenticador = new Autenticador();

$endereco = new Endereco('Perdigão', 'Matrix', 'Deu Lindo', '10');

$diretor = new Diretor('João', new Cpf('321.654.987-00'), 'CEO', 10000);
$gerente = new Gerente('Kalebe', new Cpf('111.222.333-44'), 'Administrativo', 5000);
$titular = new Titular('Guilherme', new Cpf('123.456.789-01'), $endereco);


echo $endereco->cidade . PHP_EOL;
$autenticador->tentaLogin($gerente, '4321');