<?php

namespace Observer;

class EstoqueController implements ObserverInterface {

    public function atualizar() {
        echo "Estoque do pedido lançado.<br/>";
    }

}