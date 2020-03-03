<?php

require_once 'src/Conta.php';
$primeiraConta  = new Conta("Matheus", "432.333.333-29");
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo "Nome: {$primeiraConta->recuperarNomeTitular()}"
. PHP_EOL . "CPF: {$primeiraConta->recuperarCpfTitular()}" . PHP_EOL . "Saldo: {$primeiraConta->recuperarSaldo()}";
