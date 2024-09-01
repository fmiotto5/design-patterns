<?php

namespace Interpreter;

require_once "../autoloader.php";

// grammar:
// BooleanExp ::= VariableExp | Constant | OrExp | AndExp | NotExp '(' BooleanExp ')'
// AndExp: BooleanExp 'and' BooleanExp
// OrExp: BooleanExp 'or' BooleanExp
// NotExp = 'not' BooleanExp
// Constant := 'true' | 'false'
// VariableExp ::= 'A' | 'B' | ... │ 'X' | 'Y' | 'Z'

$context = new Context();

$x = new VariableExp("x");
$y = new VariableExp("y");

$expression = new OrExp(
    new AndExp(new Constant(true), $x),
    new AndExp($y, new NotExp($x))
);

$context->assign($x, false);
$context->assign($y, true);

// evaluating: (true and $x) or ($y and (not $x))
$result = $expression->evaluate($context);

var_dump($result);

$z = new VariableExp("z");
$replacement = $expression->replace("y", new NotExp($z));
$context->assign($z, true);

// evaluating: (true and $x) or ((not $z) and (not $x))
$result = $replacement->evaluate($context);
var_dump($result);
