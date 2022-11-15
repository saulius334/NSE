<?php

declare(strict_types=1);

namespace Nord\Services;

class InputHandler
{
    public function handle(array $argv): array
    {
        $items = [
            'salary' => $argv[1],
            'additionalIncome' => $argv[2],
            'taxExemption' => $argv[3] ?? 0
        ];
        return $items;
    }
}
