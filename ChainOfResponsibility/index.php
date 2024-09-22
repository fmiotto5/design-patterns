<?php

use ChainOfResponsibility\DogHandler;
use ChainOfResponsibility\HandlerInterface;
use ChainOfResponsibility\MonkeyHandler;
use ChainOfResponsibility\SquirrelHandler;

require_once "../autoloader.php";

$monkeyHandler = new MonkeyHandler();
$squirrelHandler = new SquirrelHandler();
$dogHandler = new DogHandler();

$monkeyHandler->setNext($squirrelHandler)->setNext($dogHandler);

myApp($monkeyHandler);

function myApp(HandlerInterface $handler) {
    foreach (["nuts", "banana", "coffee"] as $food) {
        echo "Client: Who wants a " . $food . "?\n";
        $result = $handler->handle($food);
        if ($result) {
            echo "  " . $result . "<br />";
        } else {
            echo "  " . $food . " was left untouched.<br />";
        }
    }
}