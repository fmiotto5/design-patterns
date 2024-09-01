<?php

namespace Interpreter;

class VariableExp extends BooleanExp {

    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function evaluate(Context $context): bool {
        return $context->lookup($this->name);
    }

    public function replace(string $name, BooleanExp $booleanExp): BooleanExp {
        if ($name == $this->name) {
            return $booleanExp->copy();
        } else {
            return new VariableExp($this->name);
        }
    }

    public function copy(): BooleanExp {
        return new VariableExp($this->name);
    }

    public function getName(): string {
        return $this->name;
    }

}