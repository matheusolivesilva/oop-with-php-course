<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Funcionario\Funcionario;

class Gerente extends Funcionario
{
	public function calculaBonificacao(): float
	{
		return $this->recuperaSalario();
	}

}
