<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Orcamento;

class ISS extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.6;
    }
}
