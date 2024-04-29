<?php

namespace FactoryMethod\Produtos;

use FactoryMethod\Interfaces\CadeiraInterface;

class CadeiraModerna implements CadeiraInterface {
    public function sentar() {
        echo "Sentando na cadeira moderna<br />";
    }

    public function levantar() {
        echo "Levantando da cadeira moderna<br />";
    }

    public function limpar() {
        echo "Limpando a cadeira moderna<br />";
    }
}