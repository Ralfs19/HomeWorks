<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";
echo PHP_EOL;
$mySearch = (int) readline('Search: ');
echo PHP_EOL;

for ($i = 0; $i <= count($numbers); $i++){
    if (! $mySearch == $numbers[$i]){
        echo "Nothing found";
        echo PHP_EOL;
        exit;
    }

    if ($mySearch == $numbers[$i]){
        echo "Array contains: {$mySearch}";
        echo PHP_EOL;
        exit;
    }

}

//todo check if an array contains a value user entered