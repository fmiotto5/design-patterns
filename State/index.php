<?php

namespace State;

require_once "../autoloader.php";

$context = new Context();

$input = "$a = 1;\n$b = 2;\n$c = $a + $b;\necho \"Resultado da soma: \" . $c;";
for ($i=0; $i < strlen($input); $i++) { 
    $char = $input[$i];

    $context->read($char);
}

// por praticidade, passando string arbitrária para indicar final de string, mas idealmente deveria ser controlado por enum ou algo do tipo
$context->read("EOF");