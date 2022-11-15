<?php

declare(strict_types=1);

namespace Nord;

use Nord\Interfaces\MainClassInterface;
use Nord\Services\InputHandler;
use Nord\Services\OutputHandler;
use Nord\Services\TaxCalculator;

class MainClass implements MainClassInterface
{
    private InputHandler $inputHandler;
    private OutputHandler $outputHandler;
    private TaxCalculator $calculator;
    public function __construct()
    {
        $this->inputHandler = new InputHandler();
        $this->outputHandler = new OutputHandler();
        $this->calculator = new TaxCalculator();
    }
    public function main(array $argv): void
    {
        $input = $this->inputHandler->handle($argv);
        $calculatedTax = $this->calculator->calculateTax($input);
        $this->outputHandler->handle($calculatedTax); 
    }
}
