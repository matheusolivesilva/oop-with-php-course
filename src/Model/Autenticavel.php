<?php

namespace Alura\Banco\Model;

interface Autenticavel 
{
	public function podeAutenticar(string $senha): bool;
}
