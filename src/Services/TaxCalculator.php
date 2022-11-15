<?php

declare(strict_types=1);

namespace Nord\Services;

class TaxCalculator
{
    public function calculateTax(array $input): float
    {
        $totalIncome = $input['salary'] + $input['additionalIncome'] - $input['taxExemption'];

        if ($totalIncome < 30000) {
            $tax = $totalIncome * 0.20;
        } else {
            $tax = $totalIncome * 0.25;
        }
        return $tax;
    }
}
