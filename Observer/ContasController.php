<?php

namespace Observer;

class ContasController implements ObserverInterface {

    public function atualizar() {
        echo "Contas do pedido lançadas.<br/>";
    }

}