<?php

require_once "../autoloader.php";

use Observer\ContasController;
use Observer\EstoqueController;
use Observer\ObserverManager;

$observerManager = new ObserverManager();
$observerManager->adicionarObserver(new ContasController());
$observerManager->adicionarObserver(new EstoqueController());

// executa rotina que salva pedido...
echo "Salvando pedido...<br/>";
echo "Pedido salvo.<br/>";

$observerManager->notificar();
