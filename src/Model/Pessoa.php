<?php
namespace Alura\Banco\Model;
class Pessoa 
{
	protected $nome;
	protected $cpf;

	public function __construct(string $nome, CPF $cpf) 
	{
		$this->validaNome($nome);
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


	final protected function validaNome(string $nome)                                                     {                                                             if(strlen($nome) < 5) {
                        echo "Nome precisa ter no minimo 5 caracteres";
			exit();                                       }                                             }


}
