<?php

namespace AbstractFactory\Produtos;

use AbstractFactory\Interfaces\AbstractMesa;

class MesaRustica extends AbstractMesa {
    public function __construct() {
        $this->quantidadeLugares = 6;
        $this->posicoes = [];
    }        

    public function limpar() {
        echo "Mesa moderna limpa.<br />";
    }
}