<?php


function countDigits($input){
    $count = 0;
    while ($input != 0){
        $input = (int) ($input / 10);
        $count++;
    }
    return $count;
}

echo 'Number that you enter has' . ' ' . countDigits(readline("Enter number: ")) . ' ' . "digits";
echo PHP_EOL;