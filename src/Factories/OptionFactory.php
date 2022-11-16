<?php

declare(strict_types=1);

namespace Nord\Factories;

class OptionFactory
{
    private const OPTIONS = [
        'Salary :',
        'Additional Income :',
        'Tax Exemption :',
    ];
    public function createOption(string $input): mixed
    {
        $output = match ($input) {
            '1' => readline(self::OPTIONS[0]),
            '2' => readline(self::OPTIONS[1]),
            '3' => readline(self::OPTIONS[2]),
        };
        return $output;
    }
}
