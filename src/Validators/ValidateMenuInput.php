<?php

declare(strict_types=1);

namespace Nord\Validators;

class ValidateMenuInput
{
    private const OPTIONS = ['1','2','3','4','5'];
    public function validate(mixed $input): bool
    {
        if (in_array($input, self::OPTIONS)) {
            return true;
        } else {
            print_r($this->getErrorMessage());
            return false;
        }
    }
    public function getErrorMessage(): string
    {
        return "Bad menu input, please read the menu and try again \n";
    }
}
