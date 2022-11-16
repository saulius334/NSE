<?php

declare(strict_types=1);

namespace Nord\Models;

class User
{
    private float|int $salary = 0;
    private float|int $additionalIncome = 0;
    private float|int $taxExemption = 0;
    public function __construct()
    {
    }
    public function getSalary(): float
    {
        return $this->salary;
    }
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    public function getAdditionalIncome(): float
    {
        return $this->additionalIncome;
    }
    public function setAdditionalIncome(float $additionalIncome): void
    {
        $this->additionalIncome = $additionalIncome;
    }

    public function getTaxExemption(): float
    {
        return $this->taxExemption;
    }
    public function setTaxExemption(float $taxExemption): void
    {
        $this->taxExemption = $taxExemption;
    }
}
