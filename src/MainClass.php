<?php

declare(strict_types=1);

namespace Nord;

use Nord\Models\User;
use Nord\Services\Menu;
use Nord\Services\InputHandler;
use Nord\Interfaces\MainClassInterface;

class MainClass implements MainClassInterface
{
    private User $user;
    private InputHandler $inputHandler;
    private Menu $menu;

    public function __construct()
    {
        $this->menu = new Menu();
        $this->user = new User();
        $this->inputHandler = new InputHandler($this->user);
        $this->showMenu();
    }
    public function main(string $input): void
    {
        if ($input === '5') {
            print_r('Goodbye!');
            return;
        }
        $this->inputHandler->handle($input);
        $this->showMenu();
    }
    private function showMenu(): void
    {
        $this->menu->printMenu();
        $input = $this->menu->getMenuInput();

        if ($input) {
            $this->main($input);
        } else {
            $this->showMenu();
        }
    }
}
