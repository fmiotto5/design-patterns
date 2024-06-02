<?php

namespace Decorator\Decorators;

use Decorator\MiddlewareDecorator;

class EndRequestMiddleware extends MiddlewareDecorator {

    public function handle($request) {
        $this->wrapee->handle($request);
        echo "Handling the end of request<br/>";
    }

}