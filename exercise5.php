<?php

$input = strtolower(readline('Enter any words: '));
$inputSplit = str_split($input);
$string = [];

for ($i = 0; $i < count($inputSplit); $i++) {


    switch ($inputSplit) {
        case $inputSplit[$i] == 'a';
            $string[] = 2;
            break;
        case $inputSplit[$i] == 'b';
            $string[] = 22;
            break;
        case $inputSplit[$i] == 'c';
            $string[] = 222;
            break;
        case $inputSplit[$i] == 'd';
            $string[] = 3;
            break;
        case $inputSplit[$i] == 'e';
            $string[] = 33;
            break;
        case $inputSplit[$i] == 'f';
            $string[] = 333;
            break;
        case $inputSplit[$i] == 'g';
            $string[] = 4;
            break;
        case $inputSplit[$i] == 'h';
            $string[] = 44;
            break;
        case $inputSplit[$i] == 'i';
            $string[] = 444;
            break;
        case $inputSplit[$i] == 'j';
            $string[] = 5;
            break;
        case $inputSplit[$i] == 'k';
            $string[] = 55;
            break;
        case $inputSplit[$i] == 'l';
            $string[] = 555;
            break;
        case $inputSplit[$i] == 'm';
            $string[] = 6;
            break;
        case $inputSplit[$i] == 'n';
            $string[] = 66;
            break;
        case $inputSplit[$i] == 'o';
            $string[] = 666;
            break;
        case $inputSplit[$i] == 'p';
            $string[] = 7;
            break;
        case $inputSplit[$i] == 'q';
            $string[] = 77;
            break;
        case $inputSplit[$i] == 'r';
            $string[] = 777;
            break;
        case $inputSplit[$i] == 's';
            $string[] = 7777;
            break;
        case $inputSplit[$i] == 't';
            $string[] = 8;
            break;
        case $inputSplit[$i] == 'u';
            $string[] = 88;
            break;
        case $inputSplit[$i] == 'v';
            $string[] = 888;
            break;
        case $inputSplit[$i] == 'w';
            $string[] = 9;
            break;
        case $inputSplit[$i] == 'x';
            $string[] = 99;
            break;
        case $inputSplit[$i] == 'y';
            $string[] = 999;
            break;
        case $inputSplit[$i] == 'z';
            $string[] = 9999;
            break;

    }

    echo $string[$i] . " ";

}
echo PHP_EOL;

