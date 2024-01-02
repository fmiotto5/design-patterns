<?php

namespace Builder;

class IntegracaoMercadoLivreBuilder extends IntegracaoBuilder {
    
    public function buildNome() {
        $this->integracao->setNome('Mercado Livre');
    }

    public function buildCodigo() {
        $this->integracao->setCodigo(1);
    }

    public function buildImportaPedidos() {
        $this->integracao->setImportaPedidos(true);
    }

    public function buildImportaProdutos() {
        $this->integracao->setImportaProdutos(true);
    }

    public function buildEndpointApi() {
        $this->integracao->setEndointApi('https://api.mercadolivre.com');
    }

}
