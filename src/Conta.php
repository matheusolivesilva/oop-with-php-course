<?php

class Conta
{
       
	private $cpfTitular;
	private $nomeTitular;
	private $saldo;
	private static  $numeroDeContas;

	public function __construct(string $cpfTitular, string $nomeTitular)
	{
		$this->cpfTitular = $cpfTitular;
		$this->validaNomeTitular($nomeTitular);
		$this->nomeTitular = $nomeTitular;
		$this->saldo = 0;
		self::$numeroDeContas++;
	}

	public function sacar(float $valorASacar): void
	{                                                 
		if($valorASacar > $this->saldo) {         
			echo "Saldo indisponivel!";    
			return;
		}

		$this->saldo -= $valorASacar;             
	}

	public function depositar($valorADepositar): void
	{
		if($valorADepositar < 0) {
			echo "Valor precisa ser positivo";
			return;
		}

		$this->saldo += $valorADepositar;
	}

	public function transferir(float $valorATransferir, Conta $contaDestino):void 
	{
		if($valorATransferir > $this->saldo) {
			echo "Saldo insuficiente";
			return;
		}

		$this->sacar($valorATransferir);
		$contaDestino->depositar($valorATransferir);		
	}

	public function recuperarSaldo(): float 
	{
		return $this->saldo;
	}


	public function recuperarCpfTitular(): string
	{
		return $this->cpfTitular;
	}


	public function recuperarNomeTitular(): string
	{
		return $this->nomeTitular;

	}

	private function validaNomeTitular(string $nomeTitular) 
	{
		if(strlen($nomeTitular) < 5) {
			echo "Nome precisa ter no minimo 5 caracteres";
			exit();
		}
	}

	public static function recuperarNumeroDeContas(): int
	{
		return self::$numeroDeContas;
	}

}
