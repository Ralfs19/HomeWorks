<?php
$numbers = [readline("Input the 1st number: "), readline("Input the 2nd number: "), readline("Input the 3rd number: ")];
$max = $numbers[0];

$first = $numbers[0];
for ($o = 1; $o < sizeof($numbers); $o++){
    if ($numbers[$o] > $first){
        $first = $numbers[$o];
    }
}

echo "First largest number is: " . $first;
echo PHP_EOL;
