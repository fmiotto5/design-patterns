<?php

namespace State;

class State2 extends State {

    public function readChar(string $currentChar) {
        // lógica pertinente ao estado...
        echo "reading char \"$currentChar\" on state 2...<br/>";
        $this->context->setState(new State3($this->context));
    }

} 