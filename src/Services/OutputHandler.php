<?php

declare(strict_types=1);

namespace Nord\Services;

class OutputHandler
{
    public function handle(int $input, mixed $output): void
    {
        $text = match ($input) {
            1 => "$output \n",
            2 => "$output \n",
            3 => "$output \n",
            4 => "Your total tax is: $output \n",
            5 => "GoodBye!\n",
            default => ''
        };
        print_r($text);
    }
}
