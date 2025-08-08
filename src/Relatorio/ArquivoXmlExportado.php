<?php

namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Relatorio\ArquivoExportado;
use Alura\DesignPattern\Relatorio\ConteudoExportado;

class ArquivoXmlExportado implements ArquivoExportado
{
    public function __construct(protected string $nomeElementoPai)
    {
        $this->nomeElementoPai = $nomeElementoPai;
    }

    public function salvar(ConteudoExportado $conteudo): string
    {
        $elementoXml = new \SimpleXMLElement("<{$this->nomeElementoPai}/>");

        $this->montarXml($elementoXml, $conteudo->conteudo());
        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'xml');
        $elementoXml->asXML($caminhoArquivo);
        return $caminhoArquivo;
    }

    public function montarXml(\SimpleXMLElement $elemento, array $propriedades): void
    {
        foreach ($propriedades as $propriedade => $valor) {
            if (is_array($valor)) {
                $novoElemento = $elemento->addChild($propriedade);
                $this->montarXml($novoElemento, $valor);
                continue;
            }

            $elemento->addChild($propriedade, htmlspecialchars($valor));
        }
    }
}
