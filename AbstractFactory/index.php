<?php

use AbstractFactory\Exceptions\FabricaNaoEncontradaException;
use AbstractFactory\Exceptions\PosicaoNaoDisponivelException;
use AbstractFactory\Exceptions\PosicaoNaoEncontradaException;
use AbstractFactory\Fabricas\FabricaMoveisModernos;
use AbstractFactory\Fabricas\FabricaMoveisRusticos;
use AbstractFactory\Interfaces\FabricaMoveisInterface;

require_once('../autoloader.php');

$aplicacao = new Aplicacao();
$aplicacao->rotinaQualquer();

class Aplicacao {
    /** throws FabricaNaoEncontradaException */
    private function obterFabricaMoveis(): FabricaMoveisInterface {
        $tipo = 'rustico'; // finja que seja uma injeção de dependência
    
        if ($tipo === 'moderno') {
            return new FabricaMoveisModernos();
        }
    
        if ($tipo === 'rustico') {
            return new FabricaMoveisRusticos();
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

        $sofa = $fabricaMoveis->criarSofa();
        $sofa->limpar();
        $sofa->sentar();
        $sofa->deitar();

        $mesa = $fabricaMoveis->criarMesa();
        $mesa->limpar();
        try {
            $mesa->colocarTalheresNaPosicao(4);
            $mesa->colocarTalheresNaPosicao(4);
        } catch (PosicaoNaoDisponivelException $e) {
            echo "Erro:" . $e->getMessage();
        }
    }
}