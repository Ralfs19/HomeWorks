<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo
echo "Original numeric array: ";
echo PHP_EOL;
for ($i = 0; $i < count($numbers); $i++){
    echo $numbers[$i];
    echo PHP_EOL;
}





//todo
echo "Sorted numeric array: ";
echo PHP_EOL;
for ($o = 0; $o < count($numbers); $o++){
    sort($numbers);
    echo $numbers[$o];
    echo PHP_EOL;

}
$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//todo
echo "Original string array: ";
echo PHP_EOL;
foreach ($words as $word){
    echo $word;
    echo PHP_EOL;
}

//todo
echo "Sorted string array: ";
echo PHP_EOL;
for ($p = 0; $p < count($words); $p++) {
    rsort($words);
    echo $words[$p];
    echo PHP_EOL;
}
