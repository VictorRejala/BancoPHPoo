<?php

namespace Rejala\Banco\Service;

use Rejala\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacao
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}