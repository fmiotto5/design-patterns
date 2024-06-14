<?php

namespace Composite;

use FileInterface;

class Directory implements FileInterface {

    /** @var FileInterface[] $components */
    private array $components;

    public function opa() {
        return "epa";
    }

    public function addComponent(FileInterface $component): self {
        $this->components[] = $component;

        return $this;
    }

    public function getSize() {
        $size = 0;

        /** @var FileInterface $component */
        foreach ($this->components as $component) {
            $size += $component->getSize();
        }

        return $size;
    }

}