<?php

declare(strict_types=1);

namespace Nord\Services;

class OutputHandler
{
    public function handle(float $calculatedTax): void
    {
        print_r('Your total tax is: ');
        print_r($calculatedTax);
    }
}
