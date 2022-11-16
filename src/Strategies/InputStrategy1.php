<?php

declare(strict_types=1);

namespace Nord\Strategies;

use Nord\Interfaces\StrategyInterface;
use Nord\Models\User;

class InputStrategy1 implements StrategyInterface
{
    public function doLogic(User $user, mixed $result): string
    {
        if ($result < 0 || !is_numeric($result)) {
            return 'Cannot set salary, please enter valid number';
        } else {
            $user->setSalary((float)$result);
            return 'Salary is set';
        }
    }
}
