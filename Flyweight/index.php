<?php

use Flyweight\Forest;

require_once("../autoloader.php");

$forest = new Forest();

// os três objetos compartilharão o mesmo flyweight entre si
$forest->plantTree(123.456, 654.321, "Araucária", "Verde escuro", "Espinhosa");
$forest->plantTree(987.654, 456.789, "Araucária", "Verde escuro", "Espinhosa");
$forest->plantTree(234.567, 765.432, "Araucária", "Verde escuro", "Espinhosa");

// os três objetos compartilharão o mesmo flyweight entre si
$forest->plantTree(135.790, 097.531, "Eucalipto", "Verde claro", "Lisa");
$forest->plantTree(124.578, 875.421, "Eucalipto", "Verde claro", "Lisa");
$forest->plantTree(468.864, 864.468, "Eucalipto", "Verde claro", "Lisa");

echo "<pre/>";
var_dump($forest->getTrees());