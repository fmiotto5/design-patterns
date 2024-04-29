<?php

namespace FactoryMethod\Fabricas;

use FactoryMethod\Interfaces\CadeiraFactoryInterface;
use FactoryMethod\Interfaces\CadeiraInterface;
use FactoryMethod\Produtos\CadeiraRustica;

class CadeiraRusticaFactory implements CadeiraFactoryInterface {
    public function criarCadeira(): CadeiraInterface {
        return new CadeiraRustica();
    }
}