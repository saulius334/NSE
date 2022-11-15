<?php

declare(strict_types=1);

namespace Nord;

use Nord\Models\User;
use Nord\Services\InputHandler;
use Nord\Interfaces\MainClassInterface;

class MainClass implements MainClassInterface
{
    private User $user;
    private InputHandler $inputHandler;

    public function __construct()
    {
        $this->user = new User();
        $this->inputHandler = new InputHandler($this->user);
        $this->printMenu();
    }
    public function main(int $input): void
    {
        if ($input === 5) {
            print_r("Goodbye!");
            return;
        }
        $this->inputHandler->handle($input);
        $this->printMenu();
    }

    private function printMenu(): void
    {
        $menu = [
            1 => 'Input 1 to Enter Salary',
            2 => 'Input 2 to Enter Additional Income',
            3 => 'Input 3 to Enter Tax Exemption',
            4 => 'Input 4 to Calculate Tax',
            5 => 'Input 5 to Exit',
        ];
        echo 'Menu : ', implode(' | ', $menu), "\n";
        $input = trim(fgets(STDIN, 1024));
        $this->main((int)$input);
    }
}
