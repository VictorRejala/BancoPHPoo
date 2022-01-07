<?php

namespace Rejala\Banco\Modelo\Conta;

use Rejala\Banco\Modelo\Pessoa;
use Rejala\Banco\Modelo\CPF;
use Rejala\Banco\Modelo\Endereco;
use Rejala\Banco\Modelo\Autenticavel;

class Titular extends Pessoa implements Autenticavel
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

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}
