<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use App\Year;


$year2019 = new Year(2019);
$yearNow = new Year(new DateTime('now'));

echo $year2019->getValue() . PHP_EOL;
echo $yearNow->getValue() . PHP_EOL;