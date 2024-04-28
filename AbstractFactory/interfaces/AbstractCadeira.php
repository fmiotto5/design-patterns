<?php

namespace AbstractFactory\interfaces;

abstract class AbstractCadeira {
    abstract function sentar();
    abstract function levantar();
    abstract function limpar();    
}