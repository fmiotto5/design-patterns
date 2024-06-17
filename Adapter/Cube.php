<?php

namespace Adapter;

class Cube {

    private float $side;

    public function __construct(float $side) {
        $this->side = $side;
    }

    public function getSide(): float {
        return $this->side;
    }

}