<?php

declare(strict_types=1);

namespace Nord\Services;

use Nord\Models\User;

class TaxCalculator
{
    public function calculateTax(User $user): float
    {
        $totalIncome = $user->getSalary() + $user->getAdditionalIncome() - $user->getTaxExemption();

        if ($totalIncome < 30000) {
            $tax = $totalIncome * 0.20;
        } else {
            $tax = $totalIncome * 0.25;
        }
        return $tax;
    }
}
