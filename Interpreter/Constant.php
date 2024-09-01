<?php

namespace Interpreter;

class Constant extends BooleanExp {

    private bool $value;

    public function __construct(bool $value) {
        $this->value = $value;
    }

    public function evaluate(Context $context): bool {
        return $this->value;
    }

    public function replace(string $value, BooleanExp $booleanExp): BooleanExp {
        return $this;
    }

    public function copy(): BooleanExp {
        return new Constant($this->value);
    }

    public function getValue(): bool {
        return $this->value;
    }

}