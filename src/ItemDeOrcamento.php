<?php

namespace Alura\DesignPattern;

class ItemDeOrcamento implements Orcavel
{
    protected float $valor;

    public function valor(float $valor): self
    {
        $this->valor = $valor;
        return $this;
    }

    public function getValor(): float
    {
        return $this->valor;
    }
}
