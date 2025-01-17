<?php

use Alura\DesignPattern\CalculadoraDeDesconto;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\ICMS;
use Alura\DesignPattern\Orcamento;

require "vendor/autoload.php";
/* 
$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calular($orcamento, new ICMS()); */

$calculadora = new CalculadoraDeDesconto();

$orcamento = new Orcamento();
$orcamento->valor = 200;
$orcamento->quantidadeItens = 7;
echo $calculadora->calularDesconto($orcamento);
