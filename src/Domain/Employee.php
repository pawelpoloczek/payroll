<?php

declare(strict_types=1);

namespace App\Domain;

use App\Domain\Employee\BonusType;
use App\Domain\Employee\Name;
use App\Domain\Employee\Surname;
use Money\Money;

class Employee
{
    public function __construct(
        Name $name,
        Surname $surname,
        Department $department,
        Money $salaryBasis,
        Money $salaryBonus,
        BonusType $bonusType
    ) {

    }
}