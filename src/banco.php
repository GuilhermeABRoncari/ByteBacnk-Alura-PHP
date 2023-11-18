<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$primeiroCliente = new Titular('Guilherme Roncari', new Cpf('123.456.789-01'));
$segundoCliente = new Titular('Raniere Souza', new Cpf('123.456.789-02'));

$primeiraConta = new Conta($primeiroCliente);
$segundaConta = new Conta($segundoCliente);

$primeiraConta->depositar(100);
$segundaConta->depositar(500);

$segundaConta->transferir(59.99, $primeiraConta);

echo 'Saldo da conta de titular ' . $primeiraConta->getTitular()->getNome() . ' é: ' . $primeiraConta->getSaldo() . PHP_EOL;

$totalContas = Conta::totalDeContasCriadas();
echo "Numero de contas criadas: $totalContas" . PHP_EOL;