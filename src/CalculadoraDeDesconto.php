<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\DescontoMaisDe500Reais;
use Alura\DesignPattern\Descontos\DescontoMaisDe5Itnes;
use Alura\DesignPattern\Descontos\SemDesconto;
use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Orcamento;

class CalculadoraDeDesconto
{
    public function calularDesconto(Orcamento $orcamento): float
    {
        $cadeiaDeDesconto = new DescontoMaisDe5Itnes(new DescontoMaisDe500Reais(new SemDesconto()));
        return $cadeiaDeDesconto->calcularDesconto($orcamento);
    }
}
