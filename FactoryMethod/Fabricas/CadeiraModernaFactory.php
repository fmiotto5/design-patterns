<?php

namespace FactoryMethod\Fabricas;

use FactoryMethod\Interfaces\CadeiraFactoryInterface;
use FactoryMethod\Interfaces\CadeiraInterface;
use FactoryMethod\Produtos\CadeiraModerna;

class CadeiraModernaFactory implements CadeiraFactoryInterface {
    public function criarCadeira(): CadeiraInterface {
        return new CadeiraModerna();
    }
}