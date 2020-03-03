<?php

class Conta
{
       
	private $titular;
	private $saldo;
	private static  $numeroDeContas;

	public function __construct(Titular $titular)
	{
		$this->titular = $titular;
		$this->saldo = 0;
		self::$numeroDeContas++;
	}

	public function __destruct()
	{
		self::$numeroDeContas--;
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

	public static function recuperarNumeroDeContas(): int
	{
		return self::$numeroDeContas;
	}
 
	public function recuperaNome(): string
        {                                                             return $this->titular->recuperaNome();
        }
                                                                                                                    public function recuperaCpf(): string                 {                                                             return $this->titular->recuperaCpf();
        }
}
