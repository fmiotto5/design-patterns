<?php

use Command\IMDBGenresScrapingCommand;
use Command\Queue;

require_once "../autoloader.php";

$queue = Queue::get();

if ($queue->isEmpty()) {
    $queue->add(new IMDBGenresScrapingCommand());
}

$queue->run();