<?php

class SquareStrategy implements AreaStrategyInterface {

    private float $side;

    public function __construct(float $side) {
        $this->side = $side;
    }

    public function calculateArea(): float {
        return $this->side * $this->side;
    }

}