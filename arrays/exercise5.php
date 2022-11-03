<?php
$player = "X";
$gameField = [
    ["0", "3", "-"],
    ["1", "4", "-"],
    ["2", "5", "-"]
];
$firsRow[] = [$gameField[0][0], $gameField[1][0], $gameField[2][0]];
$secondRow[] = [$gameField[0][1], $gameField[1][1], $gameField[2][1]];
$thirdRow[] = [$gameField[0][2], $gameField[1][2], $gameField[2][2]];
$firstColumn[] = [$gameField[0][0], $gameField[0][1], $gameField[0][2]];
$secondColumn[] = [$gameField[1][0], $gameField[1][1], $gameField[1][2]];
$thirdColumn[] = [$gameField[2][0], $gameField[2][1], $gameField[2][2]];

$rows = [$firsRow, $secondRow, $thirdRow];
$columns = [$firstColumn, $secondColumn, $thirdColumn];
var_dump($columns[0]);







