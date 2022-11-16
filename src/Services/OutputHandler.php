<?php

declare(strict_types=1);

namespace Nord\Services;

class OutputHandler
{
    public function handle(mixed $output, string $input): void
    {
        $text = match ($input) {
            '1' => "$output \n",
            '2' => "$output \n",
            '3' => "$output \n",
            '4' => "Your total tax is: $output \n",
        };
        print_r($text);
    }
}
