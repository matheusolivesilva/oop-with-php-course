<?php
namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Pessoa;

abstract class Funcionario extends Pessoa
{
	private $salario;

	public function __construct(string $nome, CPF $cpf, float $salario) {
		parent::__construct($nome, $cpf);
		$this->salario = $salario;
	}
	
	public function recuperaSalario(): float
	{
		return $this->salario;
	}

	public function recebeAumento(float $valorAumento): void
	{
		if($valorAumento < 0) {
			echo "Aumento deve ser positivo";
			return ;
		}
		$this->salario += $valorAumento;
	}


	abstract public function calculaBonificacao(): float;
}
