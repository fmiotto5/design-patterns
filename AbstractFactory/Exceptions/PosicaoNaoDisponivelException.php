<?php

namespace AbstractFactory\Exceptions;

class PosicaoNaoDisponivelException extends \Exception {
    public function __construct(int $posicao) {
        parent::__construct("Posição $posicao já ocupada.");
    }
}
