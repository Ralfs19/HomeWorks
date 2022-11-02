<?php

$min = 1;
$max = 100;
$sum = 0;
$avargeNumber = 0;

for ($i = $min; $i <= $max; $i++){
    $sum += $i;
}

$avargeNumber = $sum / 100;

echo "The sum of 1 to 100 is {$sum}" . PHP_EOL;
echo "The avarge is {$avargeNumber}";
echo PHP_EOL;