<?php
$player = "X";
$gameField = [
    ["-", "-", "-"],
    ["-", "-", "-"],
    ["-", "-", "-"]
];
$firsRow[] = [$gameField[0][0], $gameField[1][0], $gameField[2][0]];
$secondRow[] = [$gameField[0][1], $gameField[1][1], $gameField[2][1]];
$thirdRow[] = [$gameField[0][2], $gameField[1][2], $gameField[2][2]];
$firstColumn[] = [$gameField[0][0], $gameField[0][1], $gameField[0][2]];
$secondColumn[] = [$gameField[1][0], $gameField[1][1], $gameField[1][2]];
$thirdColumn[] = [$gameField[2][0], $gameField[2][1], $gameField[2][2]];


if ($player)

for ($i = 0; $i < 3; $i++) {

    echo $firsRow[0][$i] . ' | ' . $secondRow[0][$i] . ' | ' . $thirdRow[0][$i];
    echo PHP_EOL;
}

