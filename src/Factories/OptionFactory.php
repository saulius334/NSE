<?php

declare(strict_types=1);

namespace Nord\Factories;

class OptionFactory
{
    private const OPTIONS = [
        'Salary :',
        'Additional Income :',
        'Tax Exemption :',
        'Calculate Tax?',
    ];
    public function createOption(int $input): float
    {
        if ($input === 5) {
            return 5;
        }
        $text = match ($input) {
            1 => self::OPTIONS[0],
            2 => self::OPTIONS[1],
            3 => self::OPTIONS[2],
            4 => self::OPTIONS[3],
        };
        print_r($text);
        $output = trim(fgets(STDIN, 1024));
        return (float)$output;
    }
}
