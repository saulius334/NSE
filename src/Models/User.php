<?php

declare(strict_types=1);

namespace Nord\Models;

class User
{
    private float|int $salary;
    private float|int $additionalIncome;
    private float|int $taxExemption;
    public function __construct()
    {
        $this->salary = 0;
        $this->additionalIncome = 0;
        $this->taxExemption = 0;
    }
    public function getSalary(): int|float
    {
        return $this->salary;
    }
    public function setSalary(float|int $salary): void
    {
        $this->salary = $salary;
    }

    public function getAdditionalIncome(): int|float
    {
        return $this->additionalIncome;
    }
    public function setAdditionalIncome(float|int $additionalIncome): void
    {
        $this->additionalIncome = $additionalIncome;
    }

    public function getTaxExemption(): int|float
    {
        return $this->taxExemption;
    }
    public function setTaxExemption(float|int $taxExemption): void
    {
        $this->taxExemption = $taxExemption;
    }
}
