<?php

namespace AbstractFactory\Fabricas;

use AbstractFactory\interfaces\AbstractCadeira;
use AbstractFactory\interfaces\AbstractMesa;
use AbstractFactory\interfaces\AbstractSofa;
use AbstractFactory\interfaces\FabricaMoveisInterface;
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