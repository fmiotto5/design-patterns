<?php

namespace AbstractFactory\interfaces;

use AbstractFactory\Exceptions\PosicaoNaoDisponivelException;
use AbstractFactory\Exceptions\PosicaoNaoEncontradaException;

abstract class AbstractMesa {
    protected int $quantidadeLugares;
    protected array $posicoes;

    /** throws PosicaoNaoEncontradaException */
    public function colocarTalheresNaPosicao(int $posicao) {
        if ($posicao > $this->quantidadeLugares) {
            throw new PosicaoNaoEncontradaException();
        }

        if (isset($this->posicoes[$posicao])) {
            throw new PosicaoNaoDisponivelException($posicao);
        }

        $this->posicoes[$posicao] = 'talheres';

        echo "Talheres colocados na posição $posicao.<br />";
    }

    abstract function limpar();
}
