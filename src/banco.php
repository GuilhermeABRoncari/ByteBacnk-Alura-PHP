<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Conta, ContaPoupanca, ContaCorrente,Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};

$endereco = new Endereco('Perdigão', 'Bairro', 'Rua', '10');

$primeiroCliente = new Titular('Guilherme Roncari', new Cpf('123.456.789-01'), $endereco);
$segundoCliente = new Titular('Raniere Souza', new Cpf('123.456.789-02'), $endereco);

$primeiraConta = new ContaPoupanca($primeiroCliente);
$segundaConta = new ContaCorrente($segundoCliente);

$primeiraConta->depositar(100);
$segundaConta->depositar(500);

$segundaConta->transferir(50, $primeiraConta);

echo "Efetua saque de 100 na conta do titular: {$primeiraConta->getTitular()->getNome()}" . PHP_EOL;
$primeiraConta->sacar(100);

echo 'Saldo da conta de titular ' . $primeiraConta->getTitular()->getNome() . ' é: ' . $primeiraConta->getSaldo() . PHP_EOL;
echo "Saldo da conta de titualr {$segundaConta->getTitular()->getNome()} é: {$segundaConta->getSaldo()}" . PHP_EOL;

$totalContas = Conta::totalDeContasCriadas();
echo "Numero de contas criadas: $totalContas" . PHP_EOL;