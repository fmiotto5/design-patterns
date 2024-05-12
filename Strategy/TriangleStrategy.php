<?php

class TriangleStrategy implements AreaStrategyInterface {

    private float $base;
    private float $height;

    public function __construct(float $base, float $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea(): float {
        return (1/2) * $this->base * $this->height;
    }

}