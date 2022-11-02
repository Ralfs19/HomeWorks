<?php

$randomNumber = rand(0, 100);
//$input = (int) readline('>');
$tooLow = "";
$tooHigh = "";
$youGuassed = "";

echo "I'm thinking of a number between 1-100.  Try to guess it.";
echo PHP_EOL;
$input = (int) readline('>');
echo PHP_EOL;


if ($input !== is_int(rand(0, 1))){
    echo "Invalid input";
    echo PHP_EOL;
    exit;
}

if ($input < $randomNumber){
    echo $tooLow = "Sorry you are too low. I was thinking {$randomNumber}";
    echo PHP_EOL;
    exit;
}

if ($input > $randomNumber){
    echo $tooHigh = "Sorry you are too high. I was thinking {$randomNumber}";
    echo PHP_EOL;
    exit;
}

if ($input === $randomNumber){
    echo $youGuassed = "You guassed it!  What are the odds!?!";
    echo PHP_EOL;
    exit;
}

