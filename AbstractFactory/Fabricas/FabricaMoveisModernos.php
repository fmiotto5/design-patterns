<?php

namespace AbstractFactory\Fabricas;

use AbstractFactory\interfaces\AbstractCadeira;
use AbstractFactory\interfaces\AbstractMesa;
use AbstractFactory\interfaces\AbstractSofa;
use AbstractFactory\interfaces\FabricaMoveisInterface;
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