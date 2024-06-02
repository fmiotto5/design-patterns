<?php

namespace Decorator\Decorators;

use Decorator\MiddlewareDecorator;

class LoggerMiddleware extends MiddlewareDecorator {

    public function handle($request) {
        $this->wrapee->handle($request);
        echo "Logging some data<br/>";
    }    

}