<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use App\Year;

$year = new Year(2018);

echo $year::class . PHP_EOL;