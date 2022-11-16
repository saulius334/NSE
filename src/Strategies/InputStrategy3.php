<?php

declare(strict_types=1);

namespace Nord\Strategies;

use Nord\Interfaces\StrategyInterface;
use Nord\Models\User;

class InputStrategy3 implements StrategyInterface
{
    public function doLogic(User $user, mixed $result): string
    {
        if ($result < 0 || !is_numeric($result)) {
            return 'Cannot set tax exemption, please enter valid number';
        } else {
            $user->setTaxExemption((float)$result);
            return 'Tax Exemption is set!';
        }
    }
}
