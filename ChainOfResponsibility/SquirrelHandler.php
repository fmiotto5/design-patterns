<?php

namespace ChainOfResponsibility;

class SquirrelHandler extends AbstractHandler {

    public function handle(string $request): ?string {
        if ($request === "nuts") {
            return "Squirrel: I'll eat the " . $request . ".\n";
        } else {
            return parent::handle($request);
        }
    }

}