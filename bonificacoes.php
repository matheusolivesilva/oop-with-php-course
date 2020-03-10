<?php
require 'autoload.php';
use Alura\Banco\Model\{CPF, Funcionario};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Funcionario(
	'Matheus',
	new CPF('777.777.777-77'),
	'Developer',
	5000
);



$umaFuncionaria = new Funcionario(
	'Edilania',
	new CPF('777.777.777-88'),
	'Customer Success',
	5300
);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
echo $controlador->recuperaTotal();
