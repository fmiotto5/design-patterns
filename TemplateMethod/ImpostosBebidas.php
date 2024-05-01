<?php

namespace TemplateMethod;

class ImpostosBebidas extends ImpostosAbstract {
    protected function calcularImpostoVariavel(float $precoProduto): float {
        return $precoProduto * 0.2;
    }
}