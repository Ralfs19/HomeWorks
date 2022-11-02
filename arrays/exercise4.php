<?php


/*function cloneArray($int){
    $c
}*/

$numbers = range(1, 100);
$numbers = array_slice($numbers, 0, 10);
$copyNumbers = array_merge([], $numbers);
$rem = [-7];
if ($numbers == $copyNumbers){
    array_pop($numbers);
    array_push($numbers, -7);
}
echo 'Array 1: ';
for ($i = 0; $i < count($numbers); $i++){
    echo $numbers[$i] . ' ';
}
echo PHP_EOL;
echo 'Array 2: ';
for ($o = 0; $o < count($copyNumbers); $o++){
    echo $copyNumbers[$o] . ' ';
}
echo PHP_EOL;