<?php

namespace Command;

class IMDBGenrePageScrapingCommand extends WebScrapingCommand {

    private int $page;

    public function __construct(string $url, int $page = 1) {
        parent::__construct($url);
        $this->page = $page;
    }

    public function getUrl(): string {
        return parent::getUrl() . "?page=" . $this->page;
    }

    public function parse(string $html) {
        preg_match_all("|href=\"(/title/tt[0-9]+)/|", $html, $matches);
        echo "IMDBGenrePageScrappingCommand: Discovered " . count($matches[1]) . " movies.\n";

        foreach ($matches[1] as $match) {
            Queue::get()->add(new IMDBMovieScrapingCommand("https://www.imdb.com" . $match));
        }

        if (preg_match("|Next &#187;</a>|", $html)) {
            Queue::get()->add(new IMDBGenrePageScrapingCommand($this->getUrl(), $this->page + 1));
        }
    }

}