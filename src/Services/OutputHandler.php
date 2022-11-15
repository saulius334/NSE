<?php

declare(strict_types=1);

namespace Nord\Services;

class OutputHandler
{
    public function handle(int $input, mixed $output): void
    {
        $text = match ($input) {
            1 => "Salary is set!\n",
            2 => "Additional Income is set!\n",
            3 => "Tax Exemption is set!\n",
            4 => "Your total tax is: $output \n",
            5 => "GoodBye!\n",
            default => ''
        };
        print_r($text);
    }
}
