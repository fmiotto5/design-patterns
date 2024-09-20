<?php

namespace Command;

interface CommandInterface {

    public function execute();

    public function getId(): int;

    public function getStatus(): int;

}