<?php

namespace Alura\Banco\Model\Conta;
class ContaCorrente extends Conta
{

	protected function percentualTarifa(): float
	{
		return 0.5;
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

}
