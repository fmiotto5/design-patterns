<?php

namespace ChainOfResponsibility;

abstract class AbstractHandler implements HandlerInterface {

    private HandlerInterface $nextHandler;

    public function setNext(HandlerInterface $handler): HandlerInterface {
        $this->nextHandler = $handler;

        return $this->nextHandler;
    }

    public function handle(string $request): ?string {
        if (isset($this->nextHandler)) {
            return $this->nextHandler->handle($request);
        } else {
            return null;
        }
    }

}