<?php
require 'autoload.php';
use Alura\Banco\Model\{CPF};
use Alura\Banco\Model\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor, EditorVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
	'Matheus',
	new CPF('777.777.777-77'),
	5000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
	'Edilania',
	new CPF('777.777.777-88'),
	5300
);

$umDiretor = new Diretor(
	"Gabriel",
	new CPF("888.888.888-88"),
	8000
);


$umEditor = new EditorVideo(
	"Manoell",
	new CPF("888.888.888-84"),
	1500
);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);

$controlador->adicionaBonificacaoDe($umEditor);
echo $controlador->recuperaTotal();
