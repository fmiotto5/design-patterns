<?php

namespace FactoryMethod\Exceptions;

class FabricaNaoEncontradaException extends \Exception {
    public function __construct() {
        parent::__construct("Fábrica não encontrada.");
    }
}
