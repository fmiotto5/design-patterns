<?php

namespace AbstractFactory\Produtos;

use AbstractFactory\Interfaces\AbstractCadeira;

class CadeiraModerna extends AbstractCadeira {
    public function sentar() {
        echo "Sentando na cadeira moderna<br />";
        sleep(2);
        echo "Sentado.<br />";
    }

    public function levantar() {
        echo "Levantando da cadeira moderna<br />";
        sleep(2);
        echo "Levantado.<br />";
    }

    public function limpar() {
        echo "Limpando a cadeira moderna<br />";
        sleep(2);
        echo "Cadeira moderna limpa.<br />";
    }
}