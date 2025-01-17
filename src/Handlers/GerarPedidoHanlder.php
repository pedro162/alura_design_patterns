<?php

namespace Alura\DesignPattern\Handlers;

use Alura\DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogAoGerarPedido;
use Alura\DesignPattern\Comandos\GerarPedido;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

class GerarPedidoHanlder
{
    /**@var AcaoAposGerarPedido[] */
    private array $acoesAposGerarPedido = [];

    public function __construct(
        /**exectue */
    )
    {
        //
    }

    public function adicionarAcao(AcaoAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroDeItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}
