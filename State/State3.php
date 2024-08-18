<?php

namespace State;

class State3 extends State {

    public function readChar(string $currentChar) {
        // lógica pertinente ao estado...
        echo "reading char \"$currentChar\" on state 3...<br/>";

        if ($currentChar == "EOF") {
            $this->context->setState(new State1($this->context));
            echo "done.<br/>";
        }
    }

} 