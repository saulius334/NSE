<?php

declare(strict_types=1);

namespace Nord\Interfaces;

use Nord\Models\User;

interface StrategyInterface
{
    public function doLogic(User $user, mixed $result): string;
}
