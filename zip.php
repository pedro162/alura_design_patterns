<?php

require 'vendor/autoload.php';

$orcamentoZip = new \Alura\DesignPattern\Relatorio\OrcamentoZip();
$orcamento = new \Alura\DesignPattern\Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$orcamentoZip->exportar($orcamento);
