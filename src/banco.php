<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\{Cpf, Endereco, Funcionario};

$endereco = new Endereco('Perdigão', 'Bairro', 'Rua', '10');

$primeiroCliente = new Titular('Guilherme Roncari', new Cpf('123.456.789-01'), $endereco);
$segundoCliente = new Titular('Raniere Souza', new Cpf('123.456.789-02'), $endereco);

$primeiraConta = new Conta($primeiroCliente);
$segundaConta = new Conta($segundoCliente);

$primeiraConta->depositar(100);
$segundaConta->depositar(500);

$segundaConta->transferir(59.99, $primeiraConta);

echo 'Saldo da conta de titular ' . $primeiraConta->getTitular()->getNome() . ' é: ' . $primeiraConta->getSaldo() . PHP_EOL;

$totalContas = Conta::totalDeContasCriadas();
echo "Numero de contas criadas: $totalContas" . PHP_EOL;