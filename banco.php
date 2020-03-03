<?php

require_once 'src/Titular.php';
require_once 'src/Conta.php';
$primeiraConta  = new Conta(new Titular("432.383.000-66", "Joana"));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo "Nome: {$primeiraConta->recuperaNome()}"
	. PHP_EOL . "CPF: {$primeiraConta->recuperaCpf()}" . PHP_EOL . "Saldo: {$primeiraConta->recuperarSaldo()}";


$segundaConta  = new Conta(new Titular("432.383.990-66", "Maria"));

var_dump($segundaConta);

unset($segundaConta);

$outra = new Conta(new Titular("432.883.999-66", "Daniel"));

echo "Qtd contas: " . Conta::recuperarNumeroDeContas();
