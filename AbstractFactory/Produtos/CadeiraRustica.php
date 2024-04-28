<?php

namespace AbstractFactory\Produtos;

use AbstractFactory\interfaces\AbstractCadeira;

class CadeiraRustica extends AbstractCadeira {
    public function sentar() {
        echo "Sentando na cadeira rústica...<br />";
        sleep(2);
        echo "Sentado.<br />";
    }

    public function levantar() {
        echo "Levantando da cadeira rústica...<br />";
        sleep(2);
        echo "Levantado.<br />";
    }

    public function limpar() {
        echo "Executando rotina de limpeza de cadeira rústica...<br />";
        sleep(2);
        echo "Cadeira rústica limpa.<br />";
    }
}