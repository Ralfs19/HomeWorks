<?php

function numbers($a, $b){
    $nums = $a == 15 || $b == 15 || $a + $b == 15 || abs($a - $b) == 15;
    if ($nums){
        echo 'true';
    }else{
        echo 'false';
    }

}
echo numbers(1, 1);
echo PHP_EOL;