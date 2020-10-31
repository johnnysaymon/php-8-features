<?php

declare(strict_types=1);

namespace App;

use App\Author;
use Stringable;

final class Book implements Stringable
{
    public function __construct(
        public string $title,
        public int $totalPages,
        public Author|null $author = null,
    ){}

    public function __toString(): string
    {
        return "Título: {$this->title}; Total de Páginas: {$this->totalPages}";
    }
}