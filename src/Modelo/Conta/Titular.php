<?php

namespace Rejala\Banco\Modelo\Conta;

use Rejala\Banco\Modelo\Pessoa;
use Rejala\Banco\Modelo\CPF;
use Rejala\Banco\Modelo\Endereco;

class Titular extends Pessoa
{

    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }


    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
