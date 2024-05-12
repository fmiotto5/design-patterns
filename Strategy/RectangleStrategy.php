<?php

class RectangleStrategy implements AreaStrategyInterface {

    private float $length;
    private float $height;

    public function __construct(float $length, float $height) {
        $this->length = $length;
        $this->height = $height;
    }

    public function calculateArea(): float {
        return $this->length * $this->height;
    }

}