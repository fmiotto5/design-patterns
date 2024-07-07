<?php

namespace Facade;

use Facade\Subsystem\VideoConverter;
use Facade\Subsystem\YoutubeAPI;

require_once("../autoloader.php");

$youtubeDownloaderFacade = new YoutubeDownloaderFacade(
    new YoutubeAPI("my_nice_apikey"),
    new VideoConverter()
);

$youtubeDownloaderFacade->downloadVideo("https://youtube.com/whatever");