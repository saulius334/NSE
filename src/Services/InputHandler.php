<?php

declare(strict_types=1);

namespace Nord\Services;

use Nord\Models\User;
use Nord\Factories\OptionFactory;
use Nord\Factories\StrategyFactory;
use Nord\Interfaces\StrategyInterface;

class InputHandler
{
    private OptionFactory $optionFactory;
    private TaxCalculator $calculator;
    private OutputHandler $outputHandler;
    private StrategyFactory $strategyFactory;

    public function __construct(private User $user)
    {
        $this->user = $user;
        $this->optionFactory = new OptionFactory();
        $this->calculator = new TaxCalculator();
        $this->outputHandler = new OutputHandler();
        $this->strategyFactory = new StrategyFactory();
    }
    public function handle(string $input): void
    {
        if ($input === '4') {
            $output = $this->calculator->calculateTax($this->user);
        } else {
            $strategy = $this->setStrategy($input);
            $option = $this->setOption($input);
            $output = $strategy->doLogic($this->user, $option);
        }
        $this->outputHandler->handle($output, $input);
    }
    private function setStrategy(string $input): StrategyInterface
    {
        return $this->strategyFactory->createStrategy($input);
    }
    private function setOption(string $input): string
    {
        return $this->optionFactory->createOption($input);
    }
}
