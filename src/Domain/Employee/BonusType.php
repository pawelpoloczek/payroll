<?php

declare(strict_types=1);

namespace App\Domain\Employee;

use MyCLabs\Enum\Enum;

class BonusType extends Enum
{
    public const PERCENT = '%';
    public const REGULAR = 'constant';
}