<?php

namespace Command;

class IMDBMovieScrapingCommand extends WebScrapingCommand {

    public function parse(string $html) {
        $doc = new \DOMDocument();
        $doc->loadHTML($html);
        libxml_clear_errors();
        $xpath = new \DOMXPath($doc);
        $title = $xpath->query('//h1[@data-testid="hero__pageTitle"]/span[@data-testid="hero__primary-text"]')->item(0);
        
        echo "IMDBMovieScrapingCommand: Parsed movie " . $title->nodeValue . ".\n";
    }

}