<?php

namespace State;

abstract class State {

    protected Context $context;
    abstract function readChar(string $currentChar);

    public function __construct(Context $context) {
        $this->context = $context;
    }

}