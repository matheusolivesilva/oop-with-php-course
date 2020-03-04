<?php

require_once 'src/Titular.php';
require_once 'src/Conta.php';
require_once 'src/CPF.php';
require_once 'src/Endereco.php';

$endereco = new Endereco("São Paulo", "Itaquera", "Rua das boas noites", "999");

$joana  = new Titular(new CPF("432.383.000-66"), "Joana", $endereco);

$primeiraConta  = new Conta($joana);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);
echo "Nome: {$primeiraConta->recuperaNome()}"
	. PHP_EOL . "CPF: {$primeiraConta->recuperaCpf()}" . PHP_EOL . "Saldo: {$primeiraConta->recuperarSaldo()}";


$maria = new Titular(new CPF("432.383.990-66"), "Maria", $endereco);

$segundaConta  = new Conta($maria);

var_dump($segundaConta);

unset($segundaConta);


$outroEndereco = new Endereco("São Paulo", "Itaquera", "Rua das boas noites", "9899");


$daniel= new Titular(new CPF("432.883.999-66"), "Daniel", $outroEndereco);

$outra = new Conta($daniel);

echo "Qtd contas: " . Conta::recuperarNumeroDeContas();
