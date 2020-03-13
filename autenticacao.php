<?php

require 'autoload.php';

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Funcionario\Gerente;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Autenticavel;
use Alura\Banco\Model\Conta\Titular;

use Alura\Banco\Model\Endereco;

$autenticador = new Autenticador();


$umDiretor = new Diretor(
	'Jonas',
	new CPF('995.444.333-88'),
	10000
);

$umGerente = new Gerente(
	'Joana',
	new CPF('555.444.333-88'),
	8000
);

$umGerente = new Gerente(
	'Jonas',
	new CPF('555.444.333-88'),
	10000
);


$endereco = new Endereco("São Paulo", "Itaquera", "Rua das boas noites", "999");

$umTitular  = new Titular(new CPF("432.383.000-66"), "Joana", $endereco);


echo PHP_EOL;
echo "Diretor ";
$autenticador->tentaLogin($umDiretor,'1234');

echo PHP_EOL;
echo "Diretor ";
$autenticador->tentaLogin($umDiretor,'234');


echo PHP_EOL;
echo "Gerente ";
$autenticador->tentaLogin($umGerente, '4321');

echo PHP_EOL;
echo "Gerente ";
$autenticador->tentaLogin($umGerente, '21');

echo PHP_EOL;
echo "Titular ";
$autenticador->tentaLogin($umTitular, 'abcd');

echo PHP_EOL;
echo "Titular ";
$autenticador->tentaLogin($umTitular, 'bcd');
