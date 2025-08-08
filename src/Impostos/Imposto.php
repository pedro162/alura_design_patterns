<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

abstract class Imposto
{
    /**
     * @var Imposto
     */
    private ?Imposto $outroImposto;

    public function __construct(?Imposto $outroImposto = null)
    {
        $this->outroImposto = $outroImposto;
    }

    abstract public function realizaCalculoEspecifico(Orcamento $orcamento): float;

    public function calculaImposto(Orcamento $orcamento): float
    {
        return $this->realizaCalculoEspecifico($orcamento) + $this->realizaCalculoDeoutroImposto($orcamento);
    }

    private function realizaCalculoDeoutroImposto(Orcamento $orcamento)
    {
        return $this->outroImposto === null ? 0 : $this->outroImposto->calculaImposto($orcamento);
    }
}
