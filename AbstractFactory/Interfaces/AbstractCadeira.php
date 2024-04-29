<?php

namespace AbstractFactory\Interfaces;

abstract class AbstractCadeira {
    abstract function sentar();
    abstract function levantar();
    abstract function limpar();    
}