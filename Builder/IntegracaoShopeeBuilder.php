<?php

namespace Builder;

class IntegracaoShopeeBuilder extends IntegracaoBuilder {

    public function buildNome() {
        $this->integracao->setNome('Shopee');
    }

    public function buildCodigo() {
        $this->integracao->setCodigo(2);
    }

    public function buildImportaPedidos() {
        $this->integracao->setImportaPedidos(true);
    }

    public function buildImportaProdutos() {
        $this->integracao->setImportaProdutos(false);
    }

    public function buildEndpointApi() {
        $this->integracao->setEndointApi('https://api.shopee.com');
    }

}   