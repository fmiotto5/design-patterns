<?php

namespace Interpreter;

class AndExp extends BooleanExp {

    private BooleanExp $operand1;
    private BooleanExp $operand2;

    public function __construct(BooleanExp $operand1, BooleanExp $operand2) {
        $this->operand1 = $operand1;
        $this->operand2 = $operand2;
    }

    public function evaluate(Context $context): bool {
        return $this->operand1->evaluate($context) && $this->operand2->evaluate($context);
    }

    public function replace(string $name, BooleanExp $booleanExp): BooleanExp {
        return new AndExp(
            $this->operand1->replace($name, $booleanExp),
            $this->operand2->replace($name, $booleanExp)
        );
    }

    public function copy(): BooleanExp {
        return new AndExp($this->operand1->copy(), $this->operand2->copy());
    }

}