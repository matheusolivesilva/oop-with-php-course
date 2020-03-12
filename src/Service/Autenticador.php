<?php
namespace Alura\Banco\Service;

class Autenticador 
{
	public function tentaLogin(Diretor $diretor, string $senha): void
	{
		if($diretor->podeAutenticar($senha)) {
			echo "Ok, usuario logado com sucesso";
		} else {
			echo "Opa, senha errada";
		}
	}
}
