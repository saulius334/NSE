<?php

declare(strict_types=1);

namespace Nord;

use Nord\Models\User;
use Nord\Services\InputHandler;
use Nord\Validators\ValidateMenuInput;
use Nord\Interfaces\MainClassInterface;

class MainClass implements MainClassInterface
{
    const MENU_OPTIONS = [
        1 => 'Input 1 to Enter Salary',
        2 => 'Input 2 to Enter Additional Income',
        3 => 'Input 3 to Enter Tax Exemption',
        4 => 'Input 4 to Calculate Tax',
        5 => 'Input 5 to Exit',
    ];
    private User $user;
    private InputHandler $inputHandler;
    private ValidateMenuInput $inputMenuValidator;

    public function __construct()
    {
        $this->user = new User();
        $this->inputHandler = new InputHandler($this->user);
        $this->inputMenuValidator = new ValidateMenuInput();
        $this->printMenu();
    }
    public function main(int $input): void
    {
        if ($input === 5) {
            print_r('Goodbye!');
            return;
        }
        $this->inputHandler->handle($input);
        $this->printMenu();
    }

    private function printMenu(): void
    {
        $menu = 'Menu : ' . implode(' | ', self::MENU_OPTIONS) . "\n";
        print_r($menu);
        $input = (int)fgets(STDIN, 1024);
        if (!$this->inputMenuValidator->validate($input)) {
            print_r($this->inputMenuValidator->getErrorMessage());
            $this->printMenu();
        } else {
            $this->main((int)$input);
        }
    }
}
