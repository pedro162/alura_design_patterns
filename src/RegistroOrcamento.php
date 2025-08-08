<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\Finalizado;
use Alura\DesignPattern\Http\HttpAdapter;
use DomainException;

class RegistroOrcamento
{
    /**
     * Undocumented variable
     *
     * @var HttpAdapter
     */
    protected HttpAdapter $http;

    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }

    public function registrar(Orcamento $orcamento): void
    {
        //Chamar uma API de registro
        //Enviar os dados do orçamento
        //file_get_contents('https://api.registara.orcamento');
        //curl_init();
        //Guzzle
        if (!$orcamento->estadoAtual instanceof Finalizado) {
            throw new DomainException("Apena orçaçmentos finalizados podem ser registrados na API");
        }

        $this->http->post('http://orcamento.php', [
            'valor' => $orcamento->valor,
            'quantidadeItens' => $orcamento->quantidadeItens,
        ]);
    }
}
