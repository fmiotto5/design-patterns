<?php

namespace ChainOfResponsibility;

class DogHandler extends AbstractHandler {

    public function handle(string $request): ?string {
        if ($request === "meatBall") {
            return "Dog: I'll eat the " . $request . ".\n";
        } else {
            return parent::handle($request);
        }
    }

}