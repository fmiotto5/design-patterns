<?php

namespace AbstractFactory\Produtos;

use AbstractFactory\interfaces\AbstractSofa;

class SofaModerno extends AbstractSofa {
    public function sentar() {
        echo "Sentando no sofá moderno...<br />";
        sleep(2);
        echo "Sentado.<br />";
    }

    public function deitar() {
        echo "Deitando no sofá moderno...<br />";
        sleep(2);
        echo "Deitado.<br />";
    }

    public function limpar() {
        echo "Executando rotina de limpeza de sofá moderno...<br />";
        sleep(2);
        echo "Sofá moderno limpo.<br />";
    }
}