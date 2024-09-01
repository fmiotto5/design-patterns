<?php

namespace Interpreter;

class NotExp extends BooleanExp {

    private BooleanExp $operand;

    public function __construct(BooleanExp $operand) {
        $this->operand = $operand;
    }

    public function evaluate(Context $context): bool {
        return !$this->operand->evaluate($context);
    }

    public function replace(string $name, BooleanExp $booleanExp): BooleanExp {
        return new NotExp($this->operand->replace($name, $booleanExp));
    }

    public function copy(): BooleanExp {
        return new NotExp($this->operand->copy());
    }

}