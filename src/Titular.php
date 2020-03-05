<?php

class Titular extends Funcionario 
{
	private $endereco;

	public function __construct(CPF $cpf, string  $nome, Endereco $endereco)
	{
		$this->validaNomeTitular($nome);
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->endereco = $endereco;
	}

	public function recuperaEndereco(): Endereco
	{
		return $this->endereco;
	}


}
