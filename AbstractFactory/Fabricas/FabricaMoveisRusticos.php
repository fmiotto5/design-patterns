<?php

namespace AbstractFactory\Fabricas;

use AbstractFactory\Interfaces\AbstractCadeira;
use AbstractFactory\Interfaces\AbstractMesa;
use AbstractFactory\Interfaces\AbstractSofa;
use AbstractFactory\Interfaces\FabricaMoveisInterface;
use AbstractFactory\Produtos\CadeiraRustica;
use AbstractFactory\Produtos\MesaRustica;
use AbstractFactory\Produtos\SofaRustico;

class FabricaMoveisRusticos implements FabricaMoveisInterface {
    public function criarMesa(): AbstractMesa {
        return new MesaRustica();
    }

    public function criarSofa(): AbstractSofa {
        return new SofaRustico();
    }

    public function criarCadeira(): AbstractCadeira {
        return new CadeiraRustica();
    }
} 