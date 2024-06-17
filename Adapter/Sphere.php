<?php

namespace Adapter;

use Adapter\Interfaces\GeometricRoundSolidInterface;

class Sphere implements GeometricRoundSolidInterface {

    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function getRadius(): float {
        return $this->radius;
    }

}