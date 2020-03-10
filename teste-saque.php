<?php

require 'autoload.php';

use Alura\Banco\Model\Conta\{Titular, Conta, ContaPoupanca, ContaCorrente};
use Alura\Banco\Model\{CPF, Endereco};

$conta = new ContaCorrente(
		new Titular(
			new CPF('888.888.999-99'),
			'Dididi',
			new Endereco('São Paulo', 'Teste', 'Rua teste', '888')
		)
);


$conta2 = new ContaCorrente(
		new Titular(
			new CPF('888.888.999-99'),
			'Dididi',
			new Endereco('São Paulo', 'Teste', 'Rua teste', '888')
		)
);

$conta2->depositar(500);
$conta->depositar(500);

$conta->transferir(100, $conta2 );
$conta->sacar(100);

echo $conta->recuperarSaldo();

echo PHP_EOL;

$conta->transferir(100,$conta2);
$conta->depositar(500);

$conta->sacar(100);

echo $conta2->recuperarSaldo();

