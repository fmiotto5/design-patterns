<?php

namespace Command;

class IMDBGenresScrapingCommand extends WebScrapingCommand {

    public function __construct() {
        parent::__construct("https://www.imdb.com/interest/all/");
    }

    public function parse(string $html) {
        preg_match_all("|href=\"(/interest/in.*?)\"|", $html, $matches);
        echo "IMDBGenresScrapingCommand: Discovered " . count($matches[1]) . " genres.\n";

        foreach ($matches[1] as $match) {
            Queue::get()->add(new IMDBGenrePageScrapingCommand("https://www.imdb.com" . $match));
        }
    }

}