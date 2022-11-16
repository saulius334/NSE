<?php

declare(strict_types=1);

namespace Nord\Validators;

class ValidateMenuInput
{
    const OPTIONS = [1,2,3,4,5];
    public function validate($input): bool
    {
        return in_array($input,self::OPTIONS);
    }
    public function getErrorMessage(): string
    {
        return "Bad menu input, please read the menu and try again \n";
    }
}