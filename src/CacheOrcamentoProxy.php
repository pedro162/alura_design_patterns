<?php

namespace Alura\DesignPattern;

class CacheOrcamentoProxy extends Orcamento
{
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function adicionarItem(Orcavel $item)
    {
        throw new \Exception('Não é possível adicionar itens a um orçamento cacheado.');
    }

    public function getValor(): float
    {
        if ($this->orcamento->valor === 0) {
            $this->orcamento->valor = $this->orcamento->valor();
        }

        return $this->orcamento->valor;
    }
}
