<?php

require_once 'LogsSingleton.php';

try {
    //code...
    $instancia = \Singleton\LogsSingleton::obterInstancia();
} catch (\Throwable $th) {
    $a = 0;
    //throw $th;
}

$instancia->gravarLog(gerarLogAleatorio());
$instancia->gravarLog(gerarLogAleatorio());

function gerarLogAleatorio() {
    $logs = [
        'mensagem' => 'Log de teste',
        'data' => date('Y-m-d H:i:s')
    ];

    return $logs;
}