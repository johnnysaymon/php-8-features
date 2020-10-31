<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

$year = new ('App\Year')(2018);

echo $year->getValue() . PHP_EOL;