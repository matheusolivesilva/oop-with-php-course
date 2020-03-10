<?php 
namespace Alura\Banco\Model\Conta;

class ContaPoupanca extends Conta
{

    protected function percentualTarifa(): float
    {
	    return 0.3;
    }
    public function sacar(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * 0.03;
        $valorSaque = $valorASacar + $tarifaSaque;
        if($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }
}
