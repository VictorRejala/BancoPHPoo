<?php

namespace Rejala\Banco\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}