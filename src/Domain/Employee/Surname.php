<?php

declare(strict_types=1);

namespace App\Domain\Employee;

class Surname
{
    private string $surname;

    public function __construct(string $surname)
    {
        if ($surname === '') {
            throw new \InvalidArgumentException('Surname cannot by empty');
        }

        $this->surname = $surname;
    }

    public function surname(): string
    {
        return $this->surname;
    }
}