<?php

use FactoryMethod\Exceptions\FabricaNaoEncontradaException;
use FactoryMethod\Fabricas\CadeiraModernaFactory;
use FactoryMethod\Fabricas\CadeiraRusticaFactory;
use FactoryMethod\Interfaces\CadeiraFactoryInterface;

require_once('../autoloader.php');

$aplicacao = new Aplicacao();
$aplicacao->rotinaQualquer();

class Aplicacao {
    /** throws FabricaNaoEncontradaException */
    private function obterFabricaMoveis(): CadeiraFactoryInterface {
        $tipo = 'moderno'; // finja que seja uma injeção de dependência
    
        if ($tipo === 'moderno') {
            return new CadeiraModernaFactory();
        }
    
        if ($tipo === 'rustico') {
            return new CadeiraRusticaFactory();
        }
    
        throw new FabricaNaoEncontradaException();    
    }

    // código completamente agnóstico ao tipo de objeto utilizado
    public function rotinaQualquer() {
        try {
            $fabricaMoveis = $this->obterFabricaMoveis();
        } catch (FabricaNaoEncontradaException $e) {
            echo "Erro: " . $e->getMessage();
        }

        $cadeira = $fabricaMoveis->criarCadeira();
        $cadeira->limpar();
        $cadeira->sentar();
        $cadeira->levantar();
    }
}