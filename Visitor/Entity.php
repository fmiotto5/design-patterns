<?php

namespace Visitor;

interface Entity {

    public function accept(Visitor $visitor): string;

}