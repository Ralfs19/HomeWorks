<?php

function outPay(float $bPay = 7.50, int $hWorked){
    if ($bPay < 8){
        return 'error1';
    }
    if ($hWorked > 60){
         return 'error';
    }
    if ($hWorked < 40){
        return $bPay * $hWorked;
    }
    if ($hWorked > 40){
        return $bPay * $hWorked * 1.5;
    }


}

echo outPay(8, 60) . '$';
echo PHP_EOL;