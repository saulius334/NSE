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
    public function setSalary(float|int $salary): string
    {
        if ($salary < 0) {
            return 'Cannot set salary, given number is negative';
        } else {
            $this->salary = $salary;
            return 'Salary is set';
        }
    }

    public function getAdditionalIncome(): int|float
    {
        return $this->additionalIncome;
    }
    public function setAdditionalIncome(float|int $additionalIncome): string
    {
        if ($additionalIncome < 0) {
            return 'Cannot set additional income, given number is negative';
        } else {
            $this->additionalIncome = $additionalIncome;
            return 'Additional Income is set!';
        }
    }

    public function getTaxExemption(): int|float
    {
        return $this->taxExemption;
    }
    public function setTaxExemption(float|int $taxExemption): string
    {
        if ($taxExemption < 0) {
            return 'Cannot set tax exemption, given number is negative';
        } else {
            $this->taxExemption = $taxExemption;
            return 'Tax Exemption is set!';
        }
    }
}
