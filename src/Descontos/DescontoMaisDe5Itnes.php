<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Descontos\Desconto;

class DescontoMaisDe5Itnes extends Desconto
{
    public function calcularDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItens > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calcularDesconto($orcamento);
    }
}
