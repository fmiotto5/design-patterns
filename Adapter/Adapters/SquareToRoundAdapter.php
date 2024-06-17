<?php

namespace Adapter\Adapters;

use Adapter\Cube;
use Adapter\Interfaces\GeometricRoundSolidInterface;

class SquareToRoundAdapter implements GeometricRoundSolidInterface {

    private Cube $cube;

    public function __construct(Cube $cube) {
        $this->cube = $cube;        
    }

    public function getRadius(): float {
        return $this->cube->getSide() / sqrt(2);
    }

    public function getOriginalObject(): Cube {
        return $this->cube;
    }

}