<?php

namespace State;

class Context {
    
    // idealmente o contexto teria um controle sobre o reconhecimento do token em si, mas deixei de fora a fim de simplificação
    private State $state;

    public function __construct() {
        $this->setState(new State1($this));
    }

    public function setState(State $state) {
        $this->state = $state;
    }

    public function read($currentChar) {
        $this->state->readChar($currentChar);
    }

}