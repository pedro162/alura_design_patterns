<?php

namespace Alura\DesignPattern;

class LogDesconto
{
    public function inormar(float $desconto): void
    {
        echo 'Salvando log do desconto' . PHP_EOL;
        echo "Desconto de $desconto aplicado no orçamento" . PHP_EOL;
    }
}
