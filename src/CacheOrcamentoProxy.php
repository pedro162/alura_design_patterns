<?php

namespace Alura\DesignPattern;

class CacheOrcamentoProxy implements Orcavel
{
    private Orcamento $orcamento;
    private ?float $valorCache = null;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function getValor(): float
    {
        if ($this->valorCache === null) {
            $this->valorCache = $this->orcamento->valor();
        }

        return $this->valorCache;
    }
}
