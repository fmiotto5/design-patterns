<?php

namespace Interpreter;

class Context {

    private array $variables = [];

    public function lookup(string $name): bool {
        return $this->variables[$name] ?? false;
    }

    public function assign(VariableExp $variableExp, bool $value) {
        $this->variables[$variableExp->getName()] = $value;
    }

}