<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

abstract class Desconto
{
    public function __construct(protected Desconto|null $proximoDesconto) {}
    abstract public function calcularDesconto(Orcamento $orcamento): float;
}
