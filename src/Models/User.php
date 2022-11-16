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
    public function setSalary(float $salary): string
    {
        if ($salary < 0) {
            return 'Cannot set salary, given number is negative';
        } else {
            $this->salary = $salary;
            return 'Salary is set';
        }
    }

    public function getAdditionalIncome(): float
    {
        return $this->additionalIncome;
    }
    public function setAdditionalIncome(float $additionalIncome): string
    {
        if ($additionalIncome < 0) {
            return 'Cannot set additional income, given number is negative';
        } else {
            $this->additionalIncome = $additionalIncome;
            return 'Additional Income is set!';
        }
    }

    public function getTaxExemption(): float
    {
        return $this->taxExemption;
    }
    public function setTaxExemption(float $taxExemption): string
    {
        if ($taxExemption < 0) {
            return 'Cannot set tax exemption, given number is negative';
        } else {
            $this->taxExemption = $taxExemption;
            return 'Tax Exemption is set!';
        }
    }
}
