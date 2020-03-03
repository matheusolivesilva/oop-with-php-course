<?php

class Titular {
	private $nome;
	private $cpf;

	public function __construct(CPF $cpf, string  $nome)
	{
		$this->validaNomeTitular($nome);
		$this->nome = $nome;
		$this->cpf = $cpf;
	}

	public function recuperaNome(): string
	{
		return $this->nome;
	}


	public function recuperaCpf(): string
	{
		return $this->cpf->recuperaNumero();
	}

	private function validaNomeTitular(string $nomeTitular)                                                     {                                                             if(strlen($nomeTitular) < 5) {
                        echo "Nome precisa ter no minimo 5 caracteres";
                        exit();                                       }                                             }
}
