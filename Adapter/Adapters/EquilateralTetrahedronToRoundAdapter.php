<?php

namespace Adapter\Adapters;

use Adapter\EquilateralTetrahedron;
use Adapter\Interfaces\GeometricRoundSolidInterface;

class EquilateralTetrahedronToRoundAdapter implements GeometricRoundSolidInterface {

    private EquilateralTetrahedron $equilateralTriangle;

    public function __construct(EquilateralTetrahedron $equilateralTriangle) {
        $this->equilateralTriangle = $equilateralTriangle;        
    }

    public function getRadius(): float {
        return ($this->equilateralTriangle->getSide() * sqrt(3)) / 3;
    }

    public function getOriginalObject(): EquilateralTetrahedron {
        return $this->equilateralTriangle;
    }

}