<?php

namespace Adapter;

use Adapter\Interfaces\GeometricRoundSolidInterface;

class RoundHole {

    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function getRadius(): float {
        return $this->radius;
    }

    public function fits(GeometricRoundSolidInterface $roundSolid): bool {
        return $roundSolid->getRadius() <= $this->getRadius();
    }

}