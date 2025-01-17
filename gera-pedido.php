<?php
require "./vendor/autoload.php";

use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogAoGerarPedido;
use Alura\DesignPattern\Comandos\GerarPedido;
use Alura\DesignPattern\Handlers\GerarPedidoHanlder;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

$argv; //contem todos os dados passados pelo terminal

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[2];

$command = (new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente));

$handler = new GerarPedidoHanlder();
$handler->adicionarAcao(new CriarPedidoNoBanco());
$handler->adicionarAcao(new EnviarPedidoPorEmail());
$handler->adicionarAcao(new LogAoGerarPedido());

$handler->execute($command);
//Criar pedido no banco de dados
//echo "Cria pedido no banco de dados" . PHP_EOL;
//echo "Envia email para cliente" . PHP_EOL;
