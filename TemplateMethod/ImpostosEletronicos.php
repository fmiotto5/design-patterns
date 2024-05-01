<?php

namespace TemplateMethod;

class ImpostosEletronicos extends ImpostosAbstract {
    protected function calcularImpostoVariavel(float $precoProduto): float {
        return $precoProduto * 0.3;
    }

    protected function calcularImpostoAdicional(float $precoProduto): float {
        return $precoProduto * 0.1;
    }
}