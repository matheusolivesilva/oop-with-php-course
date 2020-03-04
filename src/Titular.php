<?php

class Titular {
	private $nome;
	private $cpf;
	private $endereco;

	public function __construct(CPF $cpf, string  $nome, Endereco $endereco)
	{
		$this->validaNomeTitular($nome);
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->endereco = $endereco;
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

	public function recuperaEndereco(): Endereco
	{
		return $this->endereco;
	}


}
