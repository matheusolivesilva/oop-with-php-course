<?php
namespace Alura\Banco\Model\Funcionario;
use Alura\Banco\Model\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
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
