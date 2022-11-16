<?php

declare(strict_types=1);

namespace Nord\Strategies;

use Nord\Interfaces\StrategyInterface;
use Nord\Models\User;

class InputStrategy2 implements StrategyInterface
{
    public function doLogic(User $user, mixed $result): string
    {
        if ($result < 0 || !is_numeric($result)) {
            return 'Cannot set additional income, please enter valid number';
        } else {
            $user->setAdditionalIncome((float)$result);
            return 'Additional Income is set!';
        }
    }
}
