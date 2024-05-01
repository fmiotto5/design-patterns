<?php

namespace TemplateMethod;

class ImpostosAlimentos extends ImpostosAbstract {
    protected function calcularImpostoVariavel(float $precoProduto): float {
        return $precoProduto * 0.1;
    }
}