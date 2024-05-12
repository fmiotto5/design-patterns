<?php

require_once("../autoloader.php");

$context = new Context(new SquareStrategy(5.5));
$context->calculateArea();

$context->setStrategy(new TriangleStrategy(5.2, 6.3));
$context->calculateArea();

$context->setStrategy(new RectangleStrategy(4.1, 7));
$context->calculateArea();

echo $context->getTotalArea();
