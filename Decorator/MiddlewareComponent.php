<?php

namespace Decorator;

use Decorator\Interface\MiddlewareInterface;

class MiddlewareComponent implements MiddlewareInterface {

    public function handle($request) {
        echo "Some base behaviour<br/>";
    }

}