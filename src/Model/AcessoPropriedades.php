<?php
namespace Alura\Banco\Model;

Trait AcessoPropriedades 
{

	public function __get(string $nomeAtributo) {
		$metodo = "recupera " . ucFirst($nomeAtributo);
		return $this->metodo;
	}
}

