<?php

require 'autoload.php';

use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\Conta\ContaPoupanca;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;

$conta = new Conta(
		new Titular(
			new CPF('888.888.999-99'),
			'Dididi',
			new Endereco('São Paulo', 'Teste', 'Rua teste', '888')
		),
		2
);
$conta->depositar(500);

$conta->sacar(100);

echo $conta->recuperarSaldo();

