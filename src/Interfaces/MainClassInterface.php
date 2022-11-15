<?php

declare(strict_types=1);

namespace Nord\Interfaces;

interface MainClassInterface
{
    public function __construct();
    public function main(array $argv): void;
}