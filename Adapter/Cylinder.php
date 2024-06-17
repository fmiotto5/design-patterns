<?php

namespace Adapter;

use Adapter\Interfaces\GeometricRoundSolidInterface;

class Cylinder implements GeometricRoundSolidInterface {

    private float $radius;
    private float $height;

    public function __construct(float $radius, float $height) {
        $this->radius = $radius;
        $this->height = $height;
    }

    public function getRadius(): float {
        return $this->radius;
    }

    public function getHeight(): float {
        return $this->height;
    }

}