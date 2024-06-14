<?php

namespace Composite;

use FileInterface;

class File implements FileInterface {
    
    /** @var int $size size in bytes */
    private int $size;
    
    public function __construct(int $size) {
        $this->size = $size;
    }

    public function getSize() {
        return $this->size;
    }

}