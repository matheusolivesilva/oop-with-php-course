<?php

use Alura\Banco\Model\Funcionario\Funcionario;
namespace Alura\Banco\Model\Funcionario;


class Diretor extends Funcionario
{
	public function calculaBonificacao(): float
	{
		return $this->recuperaSalario() * 2;
	}

	public function podeAutenticar(string $senha): bool
	{
		return $senha === "1234";
	}

}
