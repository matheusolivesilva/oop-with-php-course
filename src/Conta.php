<?php

class Conta
{
       
	private $cpfTitular;
	private $nomeTitular;
	private $saldo;

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

	public function defineCpfTitular(string $cpfTitular): void
	{
		$this->cpfTitular = $cpfTitular;
	}


	public function defineNomeTitular(string $nomeTitular): void
	{
		$this->nomeTitular = $nomeTitular;

	}

}
