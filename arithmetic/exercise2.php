<?php

function CheckOddEven($number){

    if ($number % 2 == 0){
        echo 'Even Number';
    }else {
        echo 'Odd Number';
    }
    echo PHP_EOL . 'bye!';
}
echo CheckOddEven(3);
echo PHP_EOL;