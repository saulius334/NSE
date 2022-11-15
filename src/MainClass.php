<?php

declare(strict_types=1);

namespace Nord;

use Nord\Services\InputHandler;
use Nord\Services\OutputHandler;
use Nord\Services\TaxCalculator;

class MainClass
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
    public function main(array $argv)
    {
        $input = $this->inputHandler->handle($argv);
        print_r($input);
        $calculatedTax = $this->calculator->calculateTax($input);
        $this->outputHandler->handle($calculatedTax); 
    }
}
