<?php

namespace Iterator;

class CsvIterator implements \Iterator {

    const ROW_SIZE = 4096;

    protected $filePointer = null;
    protected $currentElement = null;
    protected $rowCounter = null;
    protected $delimiter = null;

    public function __construct($file, $delimiter = ",") {
        try {
            $this->filePointer = fopen($file, "r");
        } catch (\Throwable $th) {
            throw new \Exception("The file $file cannot be read.");
        }

        $this->delimiter =  $delimiter;
    }

    public function rewind(): void {
        $this->rowCounter = 0;
        rewind($this->filePointer);
    }

    public function current(): mixed {
        $this->currentElement = fgetcsv($this->filePointer, self::ROW_SIZE, $this->delimiter);

        return $this->currentElement;
    }

    public function key(): int {
        return $this->rowCounter;
    }

    public function next(): void {
        return;
    }

    public function valid(): bool {
        return !feof($this->filePointer);
    }

}