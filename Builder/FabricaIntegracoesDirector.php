<?php

namespace Builder;

class FabricaIntegracoesDirector {

    private IntegracaoBuilder $integracaoBuilder;

    public function __construct(IntegracaoBuilder $integracaoBuilder) {
        $this->integracaoBuilder = $integracaoBuilder;
    }

    public function getIntegracao() {
        $this->construirIntegracao();
        return $this->integracaoBuilder->getIntegracao();
    }

    private function construirIntegracao() {
        $this->integracaoBuilder->buildNome();
        $this->integracaoBuilder->buildCodigo();
        $this->integracaoBuilder->buildImportaPedidos();
        $this->integracaoBuilder->buildImportaProdutos();
        $this->integracaoBuilder->buildEndpointApi();
    }

}
