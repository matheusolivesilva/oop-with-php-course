<?php
		
require 'autoload.php';

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Funcionario\Desenvolvedor;

$umFuncionario = new Desenvolvedor(
	'Matheus',
	new CPF('777.777.777-77'),
	5000
);

echo $umFuncionario->nome;
