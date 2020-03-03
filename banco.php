<?php

require_once 'src/Conta.php';
$primeiraConta  = new Conta("432.383.000-66", "Joana");
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo "Nome: {$primeiraConta->recuperarNomeTitular()}"
	. PHP_EOL . "CPF: {$primeiraConta->recuperarCpfTitular()}" . PHP_EOL . "Saldo: {$primeiraConta->recuperarSaldo()}";


$segundaConta  = new Conta("432.383.990-66", "Maria");

var_dump($segundaConta);

new Conta("432.883.999-66", "Daniel");

echo "Qtd contas: " . Conta::recuperarNumeroDeContas();
