<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use App\Book;
use App\Author;

$bookList = [
    new Book('Programação Web Avançada com PHP', 205, new Author('Flávio Lisboa', 'Bacharel em Ciência da Computação')),
    new Book('Test-Driven Development', 227),
];

foreach($bookList as $book)
{
    echo $book->title . PHP_EOL;
    echo $book?->author?->name . PHP_EOL;
    echo PHP_EOL;
}