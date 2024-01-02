<?php

require_once("./autoloader.php");

$directorMercadoLivre = new \Builder\FabricaIntegracoesDirector(
    new \Builder\IntegracaoMercadoLivreBuilder()
);
$directorShopee = new \Builder\FabricaIntegracoesDirector(
    new \Builder\IntegracaoShopeeBuilder()
);

echo $directorMercadoLivre->getIntegracao();
echo $directorShopee->getIntegracao();