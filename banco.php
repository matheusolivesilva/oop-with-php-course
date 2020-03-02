<?php

require_once 'src/Conta.php';
$primeiraConta  = new Conta();
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);


$primeiraConta->defineNomeTitular("Matheus");
$primeiraConta->defineCpfTitular("432.333.333-29");
echo "Nome: {$primeiraConta->recuperarNomeTitular()}"
. PHP_EOL . "CPF: {$primeiraConta->recuperarCpfTitular()}" . PHP_EOL . "Saldo: {$primeiraConta->recuperarSaldo()}";
