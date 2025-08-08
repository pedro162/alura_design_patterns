<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\EmAprovacao;
use Alura\DesignPattern\EstadosOrcamento\EstadoOrcamento;
use Exception;

class Orcamento implements Orcavel
{
    public float $valor;
    public int $quantidadeItens;
    public EstadoOrcamento $estadoAtual;
    protected array $itens;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
        $this->itens = [];
    }

    public function aplicaDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprova($this);
    }

    public function reprova()
    {
        $this->estadoAtual->reprova($this);
    }

    public function finaliza()
    {
        $this->estadoAtual->finaliza($this);
    }

    public function adicionarItem(Orcavel $item)
    {
        $this->itens[] = $item;
    }

    public function valor(): float
    {
        return array_reduce(
            $this->itens,
            fn(float $valorAcumulado, Orcavel $item) =>
            $valorAcumulado + $item->getValor(),
            0
        );
    }

    public function getValor(): float
    {
        return $this->valor();
    }
}
