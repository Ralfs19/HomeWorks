<?php

function compute($number){
    $factioral = $number;
    for ($i = 1; $i <= $number; $i++){
        $factioral = $factioral * $i;
    }
    return $factioral;
}

echo compute(10);
echo PHP_EOL;