<?php

namespace FactoryMethod\Produtos;

use FactoryMethod\Interfaces\CadeiraInterface;

class CadeiraRustica implements CadeiraInterface {
    public function sentar() {
        echo "Sentando na cadeira rústica<br />";
    }

    public function levantar() {
        echo "Levantando da cadeira rústica<br />";
    }

    public function limpar() {
        echo "Limpando a cadeira rústica<br />";
    }
}
