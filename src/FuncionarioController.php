<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor};
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Service\FuncionarioService;

$primeiroFuncionario = new Desenvolvedor('Alisson', new Cpf('987.654.321-00'), 'Desenvolver', 1000);
$segundoFuncionario = new Gerente('Amanda', new Cpf('654.987.321-99'), 'Gerenciar', 3000);
$terceiroFuncionario = new Diretor('Newton', new Cpf('321.654.987-22'), 'Direção', 5000);

$service = new FuncionarioService();

$primeiroFuncionario->sobeNivel();

$service->adicionaBonificacaoAo($primeiroFuncionario);
$service->adicionaBonificacaoAo($segundoFuncionario);
$service->adicionaBonificacaoAo($terceiroFuncionario);

echo "Bonificações aplicadas: {$service->getTotalBonificacoes()}" . PHP_EOL;