<?php

class Conta
{
                                                          public $cpfTitular;
        public $nomeTitular;
        public $saldo;

        public function sacar(float $valorASacar)
        {                                                         if($valorASacar > $this->saldo) {                         echo "Saldo indisponivel!";                                                                 } else {
                        $this->saldo -= $valorASacar;
                }
	}

	public function depositar($valorADepositar): void
	{
		if($valorADepositar < 0) {
 			echo "Valor precisa ser positivo";
		} else {
			$this->saldo += $valorADepositar;
		}
	}
}
