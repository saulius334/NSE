<?php

declare(strict_types=1);

namespace Nord\Factories;

use Nord\Strategies\InputStrategy1;
use Nord\Strategies\InputStrategy2;
use Nord\Strategies\InputStrategy3;
use Nord\Interfaces\StrategyInterface;

class StrategyFactory
{
    public function createStrategy(string $input): StrategyInterface
    {
        return match ($input) {
            '1' => new InputStrategy1(),
            '2' => new InputStrategy2(),
            '3' => new InputStrategy3(),
        };
    }
}
