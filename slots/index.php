<?php


$slots = [
    [" ", " ", " ", " ", " "],
    [" ", " ", " ", " ", " "],
    [" ", " ", " ", " ", " "],
];

$combinations = [
    //  Lines
    [[0, 0], [0, 1], [0, 2], [0, 3], [0, 4]],
    [[1, 0], [1, 1], [1, 2], [1, 3], [1, 4]],
    [[2, 0], [2, 1], [2, 2], [2, 3], [2, 4]],

    //  Other combination
    [[0, 0], [1, 1], [2, 2], [1, 3], [0, 4]],
    [[2, 0], [1, 1], [0, 2], [1, 3], [2, 4]],
];

function displaySlots($slots){
    echo "{$slots[0][0]} {$slots[0][1]} {$slots[0][2]} {$slots[0][3]} {$slots[0][3]} {$slots[0][4]} \n";
    echo "{$slots[1][0]} {$slots[1][1]} {$slots[1][2]} {$slots[1][3]} {$slots[1][3]} {$slots[1][4]} \n";
    echo "{$slots[2][0]} {$slots[2][1]} {$slots[2][2]} {$slots[2][3]} {$slots[2][3]} {$slots[2][4]} \n";
}


$bets = [0.20, 0.40, 0.80, 1, 2, 4, 5];
$symbols = ["Q", "A", "K", "D"];
$randomElement = array_rand($symbols, 4);
$queen = $randomElement;


for ($i = 0; $i < 4; $i++)
    if ($slots[0][$i] == " "){
        $slots[0][$i] = "{$symbols[0]}";
    }
    if ($slots[1][$i] == " "){
        $slots[1][$i] = "{$symbols[0]}";
    }

    displaySlots($slots);




