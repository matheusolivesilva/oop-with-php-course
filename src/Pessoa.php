<?php
class Pessoa 
{
	public $nome;
	public $cpf;

	public function __construct(string $nome, CPF $cpf) 
	{
		$this->nome = $nome;
		$this->cpf = $cpf;
	}

	public function recuperaNome(): string
	{
		return $this->nome;
	}


	public function recuperaCpf(): CPF
	{
		return $this->cpf-recuperaNumero();
	}


	public function validaNomeTitular(string $nomeTitular)                                                     {                                                             if(strlen($nomeTitular) < 5) {
                        echo "Nome precisa ter no minimo 5 caracteres";
			exit();                                       }                                             }


}
