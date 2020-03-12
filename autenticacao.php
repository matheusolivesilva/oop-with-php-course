<?php

require 'autoload.php';

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\CPF;


$autenticador = new Autenticador();

$umDiretor = new Diretor(
	'Joao',
	new CPF('555.444.333-88'),
	10000
);

$autenticador->tentaLogin($umDiretor, 1234);

