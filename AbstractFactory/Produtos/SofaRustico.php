<?php

namespace AbstractFactory\Produtos;

use AbstractFactory\Interfaces\AbstractSofa;

class SofaRustico extends AbstractSofa {
    public function sentar() {
        echo "Sentando no sofá rústico...<br />";
        sleep(2);
        echo "Sentado.<br />";
    }

    public function deitar() {
        echo "Deitando no sofá rústico...<br />";
        sleep(2);
        echo "Deitado.<br />";
    }

    public function limpar() {
        echo "Executando rotina de limpeza de sofá rústico...<br />";
        sleep(2);
        echo "Sofá rústico limpo.<br />";
    }
}