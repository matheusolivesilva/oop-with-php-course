<?php

require_once 'src/Conta.php';
$primeiraConta  = new Conta("432.383.000-66", "Joao");
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo "Nome: {$primeiraConta->recuperarNomeTitular()}"
. PHP_EOL . "CPF: {$primeiraConta->recuperarCpfTitular()}" . PHP_EOL . "Saldo: {$primeiraConta->recuperarSaldo()}";
