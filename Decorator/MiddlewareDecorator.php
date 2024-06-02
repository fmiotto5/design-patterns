<?php

namespace Decorator;

use Decorator\Interface\MiddlewareInterface;

class MiddlewareDecorator implements MiddlewareInterface {

    protected MiddlewareInterface $wrapee;

    public function __construct(MiddlewareInterface $wrapee) {
        $this->wrapee = $wrapee;
    }

    public function handle($request) {
        echo "Some default decorator behaviour";
        $this->wrapee->handle($request);
    }

}