<?php

namespace Flyweight;

class TreeType {

    private string $name;
    private string $color;
    private string $texture;

    public function __construct($name, $color, $texture) { 
        $this->name = $name;
        $this->color = $color;
        $this->texture = $texture;
    }

}