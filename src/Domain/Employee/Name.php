<?php

declare(strict_types=1);

namespace App\Domain\Employee;

class Name
{
    private string $name;

    public function __construct(string $name)
    {
        if ($name === '') {
            throw new \InvalidArgumentException('Name cannot by empty');
        }

        $this->name = $name;
    }

    public function name(): string
    {
        return $this->name;
    }
}