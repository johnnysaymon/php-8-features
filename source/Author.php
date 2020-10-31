<?php

declare(strict_types=1);

namespace App;

use Stringable;

final class Author implements Stringable
{
    public function __construct(
        public string $name,
        public string $biography,
    ){}

    public function __toString(): string
    {
        return $this->name;
    }
}