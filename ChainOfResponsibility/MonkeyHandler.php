<?php

namespace ChainOfResponsibility;

class MonkeyHandler extends AbstractHandler {

    public function handle(string $request): ?string {
        if ($request === "banana") {
            return "Monkey: I'll eat the " . $request . ".\n";
        } else {
            return parent::handle($request);
        }
    }

}