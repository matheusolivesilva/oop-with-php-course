<?php
namespace Alura\Banco\Service;

use Alura\Banco\Model\Autenticavel;

class Autenticador 
{
	public function tentaLogin(Autenticavel  $autenticavel, string $senha): void
	{
		if($autenticavel->podeAutenticar($senha)) {
			echo "Ok, usuario logado com sucesso";
		} else {
			echo "Opa, senha errada";
		}
	}
}
