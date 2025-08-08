<?php

require '../vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, Pedido};
use Alura\DesignPattern\Relatorio\{OrcamentoExportado, PedidoExportado};
use Alura\DesignPattern\Relatorio\{ArquivoXmlExportado, ArquivoZipExportado};

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$pedido = new Pedido();
$pedido->nomeCliente = 'Gabriel Anhaia';
$pedido->dataFinalizacao = new DateTimeImmutable();

$orcamentoExportado = new OrcamentoExportado($orcamento);

$orcamentoExportadoXml = new ArquivoXmlExportado('orcamento');
$orcamentoExportadoZip = new ArquivoZipExportado('orcamento');
echo $orcamentoExportadoZip->salvar($orcamentoExportado);
echo PHP_EOL;
echo $orcamentoExportadoXml->salvar($orcamentoExportado);
echo PHP_EOL;
