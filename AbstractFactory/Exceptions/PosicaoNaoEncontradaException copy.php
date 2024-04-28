<?php

namespace AbstractFactory\Exceptions;

class PosicaoNaoEncontradaException extends \Exception {
    public function __construct() {
        parent::__construct("Posição não encontrada.");
    }
}
