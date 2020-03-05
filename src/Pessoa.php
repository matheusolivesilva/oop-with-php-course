<?php
class Pessoa 
{
	protected $nome;
	protected $cpf;

	public function __construct(string $nome, CPF $cpf) 
	{
		$this->validaNomeTitular($nome);
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


	protected function validaNomeTitular(string $nomeTitular)                                                     {                                                             if(strlen($nomeTitular) < 5) {
                        echo "Nome precisa ter no minimo 5 caracteres";
			exit();                                       }                                             }


}
