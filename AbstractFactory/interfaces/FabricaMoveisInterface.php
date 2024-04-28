<?php

namespace AbstractFactory\interfaces;

use AbstractFactory\interfaces\AbstractCadeira;
use AbstractFactory\interfaces\AbstractMesa;
use AbstractFactory\interfaces\AbstractSofa;

interface FabricaMoveisInterface {
    public function criarMesa(): AbstractMesa;
    public function criarSofa(): AbstractSofa;
    public function criarCadeira(): AbstractCadeira;
}
