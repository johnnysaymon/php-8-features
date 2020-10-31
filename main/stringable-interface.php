<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use App\Year;

$year = new Year(2016);

echo $year instanceof Stringable ? $year : 'O objeto não é Stringable';
echo PHP_EOL;