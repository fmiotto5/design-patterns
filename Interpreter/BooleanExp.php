<?php

namespace Interpreter;

abstract class BooleanExp {

    abstract function evaluate(Context $context): bool;
    abstract function replace(string $char, BooleanExp $booleanExp): BooleanExp;
    abstract function copy(): BooleanExp;

}