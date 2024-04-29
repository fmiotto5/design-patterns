<?php

namespace AbstractFactory\Fabricas;

use AbstractFactory\Interfaces\AbstractCadeira;
use AbstractFactory\Interfaces\AbstractMesa;
use AbstractFactory\Interfaces\AbstractSofa;
use AbstractFactory\Interfaces\FabricaMoveisInterface;
use AbstractFactory\Produtos\CadeiraModerna;
use AbstractFactory\Produtos\MesaModerna;
use AbstractFactory\Produtos\SofaModerno;

class FabricaMoveisModernos implements FabricaMoveisInterface {
    public function criarCadeira(): AbstractCadeira {
        return new CadeiraModerna();
    }

    public function criarMesa(): AbstractMesa {
        return new MesaModerna();
    }

    public function criarSofa(): AbstractSofa {
        return new SofaModerno();
    }
}