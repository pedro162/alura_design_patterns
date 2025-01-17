<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Descontos\Desconto;

class SemDesconto extends Desconto
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calcularDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}
