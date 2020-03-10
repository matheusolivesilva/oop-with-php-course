<?php
namespace Alura\Banco\Model\Conta;
abstract class Conta
{
       
	private $titular;
	protected $saldo;
	private static  $numeroDeContas = 0;


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
		$tarifaSaque = $valorASacar * $this->percentualTarifa();
		$valorSaque =  $valorASacar + $tarifaSaque;		
		if($valorSaque > $this->saldo) {         
			echo "Saldo indisponivel!";    
			return;
		}

		$this->saldo -= $valorSaque;
	}

	public function depositar($valorADepositar): void
	{
		if($valorADepositar < 0) {
			echo "Valor precisa ser positivo";
			return;
		}

		$this->saldo += $valorADepositar;
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
	public function recuperaCpf(): string                 {                                                             return $this->titular->recuperaCpf();		}

	abstract public function transferir(float $valorATransferir, Conta $contaDestino):void;
}
