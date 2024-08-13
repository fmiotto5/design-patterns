<?php

namespace Flyweight;

class Tree {

    private float $x;
    private float $y;
    private TreeType $treeType;

    public function __construct(float $x, float $y, string $name, string $color, string $texture) {
        $this->x = $x;
        $this->y = $y;
        $this->treeType = TreeFactory::getTreeType($name, $color, $texture);
    }

}