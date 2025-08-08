<?php

namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Relatorio\ArquivoExportado;
use Alura\DesignPattern\Relatorio\ConteudoExportado;

class ArquivoZipExportado implements ArquivoExportado
{
    public function __construct(protected string $nomeArquivo)
    {
        $this->nomeArquivo = $nomeArquivo;
    }

    public function salvar(ConteudoExportado $conteudo): string
    {
        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'zip');
        $zip = new \ZipArchive();
        $zip->open($caminhoArquivo, \ZipArchive::CREATE);
        $zip->addFromString($this->nomeArquivo, serialize($conteudo->conteudo()));
        $zip->close();
        return $caminhoArquivo;
    }
}
