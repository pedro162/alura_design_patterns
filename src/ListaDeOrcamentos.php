<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\Finalizado;
use ArrayIterator;
use Iterator;
use IteratorAggregate;
use Traversable;

class ListaDeOrcamentos implements IteratorAggregate
{
    /** @var Orcamento[] */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function getOrcamentos()
    {
        return $this->orcamentos;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->orcamentos);
    }

    public function orcamentosFinalizados()
    {
        return array_filter(
            $this->orcamentos,
            fn(Orcamento $orcamento) => $orcamento->estadoAtual instanceof Finalizado
        );
    }
}
