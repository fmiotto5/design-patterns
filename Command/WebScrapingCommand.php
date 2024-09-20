<?php

namespace Command;

abstract class WebScrapingCommand implements CommandInterface {

    private int $id;
    private int $status = 0;
    private string $url;

    public function __construct(string $url) {
        $this->url = $url;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getStatus(): int {
        return $this->status;
    }

    public function getUrl(): string {
        return $this->url;
    }

    public function download() {
        $html = file_get_contents($this->url);
        echo "WebScrapingCommand: Downloaded {$this->url}\n";

        return $html;
    }

    public function execute(): void {
        $html = $this->download();
        $this->parse($html);
        $this->complete();
    }

    abstract public function parse(string $html);

    public function complete() {
        $this->status = 1;
        Queue::get()->completeCommand($this);
    }

}