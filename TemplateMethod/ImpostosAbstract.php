<?php 

namespace TemplateMethod;

abstract class ImpostosAbstract {
    private function calcularPrimeiroImpostoFixo(float $precoProduto): float {
        return $precoProduto * 0.1;
    }

    private function calcularSegundoImpostoFixo(float $precoProduto): float {
        return $precoProduto * 0.2;
    }

    // hook method
    protected function calcularImpostoAdicional(float $precoProduto): float {
        return $precoProduto * 0;
    }

    // template method
    abstract protected function calcularImpostoVariavel(float $precoProduto): float;

    public function calcularImpostosProduto(float $precoProduto): float {
        $precoProduto += $this->calcularImpostoVariavel($precoProduto);
        $precoProduto += $this->calcularPrimeiroImpostoFixo($precoProduto);
        $precoProduto += $this->calcularSegundoImpostoFixo($precoProduto);
        $precoProduto += $this->calcularImpostoAdicional($precoProduto);

        return $precoProduto;
    }
}