<?php

class Conta
{
	public $cpfTitular;
	public $nomeTitular;
	public $saldo;

	public function sacar(float $valorASacar)
	{
		if($valorASacar > $this->saldo) {
			echo "Saldo indisponivel!";
		} else {
			$this->saldo -= $valorASacar; 
		}
	}
}
