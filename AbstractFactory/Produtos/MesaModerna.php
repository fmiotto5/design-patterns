<?php

namespace AbstractFactory\Produtos;

use AbstractFactory\Interfaces\AbstractMesa;

class MesaModerna extends AbstractMesa {
    public function __construct() {
        $this->quantidadeLugares = 4;
        $this->posicoes = [];
    }        

    public function limpar() {
        echo "Mesa moderna limpa.<br />";
    }
}