<?php
require_once 'autoload.php';
use Alura\Banco\Model\Pessoa;

use Alura\Banco\Model\Funcionario;
use Alura\Banco\Model\Conta\Titular;

use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\CPF;

use Alura\Banco\Model\Conta\Conta;

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

$funcionario = new Funcionario("Isaque", new CPF("443.333.443-76"), "Developer");

var_dump($funcionario);
