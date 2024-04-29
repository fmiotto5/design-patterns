<?php

namespace AbstractFactory\Interfaces;

use AbstractFactory\Interfaces\AbstractCadeira;
use AbstractFactory\Interfaces\AbstractMesa;
use AbstractFactory\Interfaces\AbstractSofa;

interface FabricaMoveisInterface {
    public function criarMesa(): AbstractMesa;
    public function criarSofa(): AbstractSofa;
    public function criarCadeira(): AbstractCadeira;
}
