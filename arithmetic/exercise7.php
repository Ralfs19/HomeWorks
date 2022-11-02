<?php

    $a = -9.81;
    $t = 10.0;
    $v = 0.0;
    $x = 0.0;

    $gravity = $gravity = ($a * ($t * $t) / 2) + ($v * $t) + $x;
    echo $gravity . 'm';
    echo PHP_EOL;
