<?php

namespace Decorator\Decorators;

use Decorator\MiddlewareDecorator;

class BeginRequestMiddleware extends MiddlewareDecorator {

    public function handle($request) {
        $this->wrapee->handle($request);
        echo "Handling the start of request<br/>";
    }

}