<?php

namespace Facade;

use Facade\Subsystem\VideoConverter;
use Facade\Subsystem\YoutubeAPI;

class YoutubeDownloaderFacade {

    private YoutubeAPI $youtubeAPI;
    private VideoConverter $videoConverter;

    public function __construct(YoutubeAPI $youtubeAPI, VideoConverter $videoConverter) {
        $this->youtubeAPI = $youtubeAPI;
        $this->videoConverter = $videoConverter;
    }

    public function downloadVideo(string $url) {
        $this->youtubeAPI->downloadFromUrl($url);
        $this->youtubeAPI->someAdditionalYTHandling();
        $this->youtubeAPI->anotherAdditionalYTHandling();
        $binaryVideoData = $this->youtubeAPI->getBinaryVideoData();

        $this->videoConverter->convertVideo($binaryVideoData, "mp4");
        $this->videoConverter->someAdditionalConversionHandling();
        $this->videoConverter->anotherAdditionalConversionHandling();

        echo "Video downloaded successfuly.<br/>";
    }

}