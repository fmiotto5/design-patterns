<?php

namespace Facade\Subsystem;

class VideoConverter {

    public function convertVideo(string $binaryData, string $format) {
        echo "Converting video to {$format} format...<br/>";
        echo "Done.<br/>";
    }

    public function someAdditionalConversionHandling() {
        // do something...
    }

    public function anotherAdditionalConversionHandling() {
        // do something...
    }

}