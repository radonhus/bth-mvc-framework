<?php

declare(strict_types=1);

namespace App\Models\Game21;

class GraphicalDice extends Dice
{

    public function diceImage(): string
    {
        return "dice-" . $this->getLastRoll();
    }
}
