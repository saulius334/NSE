<?php

declare(strict_types=1);

namespace Nord\Services;

use Nord\Validators\ValidateMenuInput;

class Menu
{
    private ValidateMenuInput $validator;
    public function __construct()
    {
        $this->validator = new ValidateMenuInput();
    }
    private const MENU_OPTIONS = [
        1 => 'Input 1 to Enter Salary',
        2 => 'Input 2 to Enter Additional Income',
        3 => 'Input 3 to Enter Tax Exemption',
        4 => 'Input 4 to Calculate Tax',
        5 => 'Input 5 to Exit',
    ];
    public function printMenu(): void
    {
        $menu = 'Menu : ' . implode(' | ', self::MENU_OPTIONS) . "\n";
        print_r($menu);
    }
    public function getMenuInput(): mixed
    {
        $input = readline('Input :');
        if ($this->validator->validate($input)) {
            return $input;
        } else {
            return false;
        }
    }
}
