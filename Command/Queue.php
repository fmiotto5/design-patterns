<?php

namespace Command;

class Queue {

    /** @var CommandInterface[] $queue */
    private array $queue = [];
    private bool $executing = false;

    public static function get(): Queue {
        static $instance;

        if (!isset($instance)) {
            $instance = new Queue();
        }

        return $instance;
    }

    public function add(CommandInterface $command) {
        $this->queue[] = $command;
    }

    public function run() {
        $this->executing = true;

        while (!$this->isEmpty()) {
            $command = array_values($this->queue)[0];
            $command->execute();
        }

        $this->executing = false;
    }

    public function isEmpty(): bool {
        return empty($this->queue);
    }

    public function completeCommand(CommandInterface $command) {
        $index = array_search($command, $this->queue);
        unset($this->queue[$index]);

        if ($this->isEmpty()) {
            $this->run();
        }
    }

}