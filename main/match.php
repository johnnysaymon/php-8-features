<?php

declare(strict_types=1);

$number = rand(0,4);

echo match($number) {
    1 => 'Pedra',
    2 => 'Papel',
    3 => 'Tesoura',
    default => 'Não quero jogar',
};

echo PHP_EOL;