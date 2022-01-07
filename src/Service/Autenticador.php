<?php

namespace Rejala\Banco\Service;

use Rejala\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {

            echo "Usuário logado no sistema";
        } else {

            echo "Senha incorreta!";
        }
    }

}