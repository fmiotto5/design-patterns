<?php

require_once("../autoloader.php");

$impostosEletronicos = new \TemplateMethod\ImpostosEletronicos();
$impostosAlimentos = new \TemplateMethod\ImpostosAlimentos();
$impostosBebidas = new \TemplateMethod\ImpostosBebidas();

echo $impostosEletronicos->calcularImpostosProduto(3.99);
echo "<br />";
echo $impostosAlimentos->calcularImpostosProduto(4.99);
echo "<br />";
echo $impostosBebidas->calcularImpostosProduto(5.99);
echo "<br />";
