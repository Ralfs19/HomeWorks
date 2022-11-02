<?php

function checkPositive($input){
    if ($input > 0){
        echo "Positive number";
        echo PHP_EOL;
    }
    if ($input < 0){
        echo "Negative number";
        echo PHP_EOL;
    }
}

checkPositive(readline("Enter the number: "));