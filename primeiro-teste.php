<?php

require 'src/Conta.php';

$conta = new Conta();

$conta->nomeTitular = "Di";
$conta->cpfTitular = "444.444.444-33";
$conta->saldo = 500;

$conta->sacar(200);

echo "Saldo da conta {$conta->saldo}";

$conta->depositar(500);
echo PHP_EOL;

echo "Saldo da conta apos deposito {$conta->saldo}";

$contaTransferencia = new Conta();

$contaTransferencia->nomeTitular = "Di";
$contaTransferencia->cpfTitular = "444.444.444-33";
$contaTransferencia->saldo = 500;

$contaTransferencia->transferir(300, $conta);

echo "Valor da conta 1 apos realizar  transferencia {$contaTransferencia->saldo}";


echo "Valor da conta 2 apos realizar  transferencia {$conta->saldo}";

