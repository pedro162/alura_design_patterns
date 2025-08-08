<?php

use Alura\DesignPattern\CacheOrcamentoProxy;
use Alura\DesignPattern\ItemDeOrcamento;
use Alura\DesignPattern\Orcamento;

require "vendor/autoload.php";

$orcamento = new Orcamento();
$item1 = (new ItemDeOrcamento())->valor(20);
$item2 = (new ItemDeOrcamento())->valor(10);

$orcamento->adicionarItem($item1);
$orcamento->adicionarItem($item2);

$orcamentoAntigo = new Orcamento();
$item3 = (new ItemDeOrcamento())->valor(10);
$orcamentoAntigo->adicionarItem($item3);

$orcamentoAntigoAinda = new Orcamento();
$item4 = (new ItemDeOrcamento())->valor(10);
$orcamentoAntigoAinda->adicionarItem($item4);
$orcamentoAntigo->adicionarItem($orcamentoAntigoAinda);

$orcamento->adicionarItem($orcamentoAntigo);
$orcamentoProxy = new CacheOrcamentoProxy($orcamento);
echo $orcamentoProxy->valor();
echo $orcamentoProxy->valor();
//https://refactoring.guru/design-patterns/decorator