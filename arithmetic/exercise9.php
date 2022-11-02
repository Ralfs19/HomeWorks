<?php


function bmi($weight, $height)
{
    $bmi = $weight / $height * $height;
    return $bmi;
}

$bmi = bmi(20, 166);


    if ($bmi < 18.5) {
        echo "UNDERWEIGHT";
    } else if ($bmi > 18.5 && $bmi < 25) {
        echo "NORMAL WEIGHT";
    } else if ($bmi > 24.9) {
        echo "OVERWEIGHT";
    }


echo PHP_EOL;