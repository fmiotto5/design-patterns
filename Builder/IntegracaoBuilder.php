<?php

namespace Builder;

abstract class IntegracaoBuilder {

    protected IntegracaoProduct $integracao;

    public function __construct() {
        $this->integracao = new IntegracaoProduct();
    }

    public function getIntegracao(): IntegracaoProduct {
        return $this->integracao;
    }

    abstract public function buildNome();
    abstract public function buildCodigo();
    abstract public function buildImportaPedidos();
    abstract public function buildImportaProdutos();
    abstract public function buildEndpointApi();

}
