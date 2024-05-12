<?php

class Context {

    private float $totalArea = 0;
    private AreaStrategyInterface $strategy;

    public function __construct(AreaStrategyInterface $strategy) {
        $this->strategy = $strategy;
    }

    public function getTotalArea(): float {
        return $this->totalArea;
    }

    public function setStrategy(AreaStrategyInterface $strategy) {
        $this->strategy = $strategy;
    }

    public function calculateArea() {
        $this->totalArea += $this->strategy->calculateArea();
    }

}