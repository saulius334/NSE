<?php

declare(strict_types=1);

namespace Nord\Services;

use Nord\Models\User;
use Nord\Factories\OptionFactory;

class InputHandler
{
    private OptionFactory $optionFactory;
    private TaxCalculator $calculator;
    private OutputHandler $outputHandler;

    public function __construct(private User $user)
    {
        $this->user = $user;
        $this->optionFactory = new OptionFactory();
        $this->calculator = new TaxCalculator();
        $this->outputHandler = new OutputHandler();
    }
    public function handle(int $input): void
    {
        if ($input === 4) {
            $output = $this->calculator->calculateTax($this->user);
        } else {
            $result = $this->optionFactory->createOption($input);
            $output = match ($input) {
                1 => $this->user->setSalary($result),
                2 => $this->user->setAdditionalIncome($result),
                3 => $this->user->setTaxExemption($result),
                default => ''
            };
        }
        $this->outputHandler->handle($input, $output);
    }
}
