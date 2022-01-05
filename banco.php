<?php

require_once 'autoload.php';

use Rejala\Banco\Modelo\{Endereco, CPF};
use Rejala\Banco\Modelo\Conta\{Titular, ConteCorrente, ContaPoupanca, Conta};

$endereco = new Endereco('Salvador', 'Barra', 'Rua da Barra', '50');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new ConteCorrente($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new ContaPoupanca($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('São Paulo', 'Faria Lima', 'Rua da FL', '10');
$outra = new ConteCorrente(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();

