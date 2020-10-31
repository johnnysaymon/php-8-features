<?php

declare(strict_types=1);

namespace App;

use DateTimeInterface;

final class Year
{
    private int $year;

    public function __construct(int|DateTimeInterface $year)
    {
        $this->year = $year instanceof DateTimeInterface
            ? (int) $year->format('Y')
            : $year;
    }

    public function getValue(): int
    {
        return $this->year;
    }

    public function __toString(): string
    {
        return (string) $this->getValue();
    }
}