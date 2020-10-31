<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use App\Book;

$bookList = [
    new Book('Programação Web Avançada com PHP', 205),
    new Book('Test-Driven Development', 227),
    new Book('Desenvolvimento web com PHP e MySQL ', 381),
];

foreach($bookList as $book)
{
    echo $book . PHP_EOL;
}