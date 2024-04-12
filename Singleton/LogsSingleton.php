<?php

namespace Singleton;

class LogsSingleton {
    protected static $instancia;
    private const NOME_ARQUIVO = 'logs.txt';

    private function __construct() {}

    private function __clone() {}

    private function __wakeup() {}

    public static function obterInstancia() {
        if (is_null(self::$instancia)) {
            self::$instancia = new self();
        }

        return self::$instancia;
    }

    public function gravarLog(array $dados) {
        $logsAnteriores = [];

        if (filesize(self::NOME_ARQUIVO) > 0) {
            $conteudo = file_get_contents(self::NOME_ARQUIVO);
            $logsAnteriores = json_decode($conteudo, true);
        }

        $logs[] = $logsAnteriores;
        $logs[] = $dados;

        file_put_contents(self::NOME_ARQUIVO, json_encode($logs));
    }
}
