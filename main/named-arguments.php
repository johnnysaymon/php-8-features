<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use App\Book;
use App\Author;

$timestamp = mktime(day: 31, month: 10, year: 2020, hour: 16, minute: 57);

$book = new Book(
    title: 'Programação Web Avançada com PHP',
    totalPages: 205,
    author: new Author(
        name: 'Flávio Lisboa',
        biography: 'Bacharel em Ciência da Computação',
    ),
);

echo $timestamp . PHP_EOL;
echo $book . PHP_EOL;