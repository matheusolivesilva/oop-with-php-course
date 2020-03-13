<?php
require 'autoload.php';
use Alura\Banco\Model\Endereco;


$umEndereco = new Endereco("São Paulo", "Itaquera", "Rua das boas noites", "999");

echo $umEndereco->bairro;
exit();
echo $umEndereco . PHP_EOL;



