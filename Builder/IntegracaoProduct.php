<?php

namespace Builder;

class IntegracaoProduct {

    protected string $nome;
    protected int $codigo;
    protected bool $importaPedidos;
    protected bool $importaProdutos;
    protected string $endointApi;

    public function __toString() {
        return "Nome: {$this->nome}<br />Código: {$this->codigo}<br />Importa Pedidos: {$this->getImportaPedidos()}<br />Importa Produtos: {$this->getImportaProdutos()}<br />Endoint API: {$this->endointApi}<br /><br />";
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function setCodigo(int $codigo) {
        $this->codigo = $codigo;
    }

    public function setImportaPedidos(bool $importaPedidos) {
        $this->importaPedidos = $importaPedidos;
    }

    public function setImportaProdutos(bool $importaProdutos) {
        $this->importaProdutos = $importaProdutos;
    }

    public function setEndointApi(string $endointApi) {
        $this->endointApi = $endointApi;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getImportaPedidos() {
        return $this->importaPedidos ? 'Sim' : 'Não';
    }

    public function getImportaProdutos() {
        return $this->importaProdutos ? 'Sim' : 'Não';
    }

    public function getEndointApi() {
        return $this->endointApi;
    }
    
}
