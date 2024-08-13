<?php

namespace Flyweight;

class Forest {

    /** @var Tree[] $trees */
    private array $trees;

    /** @return Tree[] */
    public function getTrees(): array {
        return $this->trees;
    }

    public function plantTree(float $x, float $y, string $name, string $color, string $texture) {
        $this->trees[] = new Tree($x, $y, $name, $color, $texture);
    }

}