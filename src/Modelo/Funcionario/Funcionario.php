<?php

namespace Rejala\Banco\Modelo\Funcionario;

use Rejala\Banco\Modelo\Conta\Conta;
use Rejala\Banco\Modelo\Pessoa;
use Rejala\Banco\Modelo\CPF;


class Funcionario extends Pessoa
{

    private $salario;

    public function __construct(string $nome,CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alteraNome(string $nome):void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }
}