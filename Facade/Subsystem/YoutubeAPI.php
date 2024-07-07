<?php

namespace Facade\Subsystem;

class YoutubeAPI {

    private string $apiKey;

    public function __construct(string $apiKey) {
        $this->apiKey = $apiKey;
    }

    public function downloadFromUrl(string $url) {
        echo "Downloading video from URL {$url}...<br/>";
        echo "Done.<br/>";
    }

    public function someAdditionalYTHandling() {
        // do something...
    }

    public function anotherAdditionalYTHandling() {
        // do something...
    }

    public function getBinaryVideoData(): string {
        return "handled binary data";
    }

}