<?php

namespace Alura\DesignPattern\Comandos;

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

class GerarPedido
{
    public function __construct(
        protected float $valorOrcamento,
        protected int $numeroDeItens,
        protected string $nomeCliente
    ) {}

    public function getValorOrcamento()
    {
        return $this->valorOrcamento;
    }
    public function getNumeroDeItens()
    {
        return $this->numeroDeItens;
    }
    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }
}
