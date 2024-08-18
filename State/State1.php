<?php

namespace State;

class State1 extends State {

    public function readChar(string $currentChar) {
        // lógica pertinente ao estado...
        echo "reading char \"$currentChar\" on state 1...<br/>";
        $this->context->setState(new State2($this->context));
    }

} 