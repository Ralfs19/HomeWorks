<?php


$board = [
    [" ", " ", " "],
    [" ", " ", " "],
    [" ", " ", " "]
];

$combinations = [
    // Horizontal
    [[0, 0], [0, 1], [0, 2]],
    [[1, 0], [1, 1], [1, 2]],
    [[2, 0], [2, 1], [2, 2]],

    // Vertical
    [[0, 0], [1, 0], [2, 0]],
    [[0, 1], [1, 1], [2, 1]],
    [[0, 2], [1, 2], [2, 2]],

    //  Diognal
    [[0, 0], [1, 1], [2, 2]],
    [[0, 2], [1, 1], [2, 0]],
];

function displayBoard(array $board){
    echo "{$board[0][0]} | {$board[0][1]} | {$board[0][2]} \n";
    echo "----------\n";
    echo "{$board[1][0]} | {$board[1][1]} | {$board[1][2]} \n";
    echo "----------\n";
    echo "{$board[2][0]} | {$board[2][1]} | {$board[2][2]} \n";
}

echo "Lets the games begin!\n";

displayBoard($board);
$totalTurns = 0;
$playerA = "X";
$playerB = "O";
$currentPlayer = $playerA;

// Ongoing game
while (true){
    $userChoise = readline("\n '{$currentPlayer}', Choose your location (row, column) (include space between)");
    [$x, $y] = explode(' ', $userChoise);

    if ($x == null || $y == null){
        displayBoard($board);
        echo "\n Invalid input. Enter your choise as two numbers, seperated by a space";
        continue;
    }

    if ($board[$x][$y] == ' '){
        $board[$x][$y] = $currentPlayer;
    }else{
        displayBoard($board);
        echo "\nCell is already filled. Choose another cell!\n";
        continue;
    }
    echo PHP_EOL;
    displayBoard($board);

    foreach ($combinations as $combination){

        $conditionalCounter = 0;

        foreach ($combination as $position){
            [$x, $y] = $position;
            if ($board[$x][$y] !== $currentPlayer){
                break;
            }
            $conditionalCounter++;
        }

        if ($conditionalCounter == 3){
            echo "\nPlayer {$currentPlayer} wins!\n";
            exit;
        }
    }

    if ($turns === 9){
        echo 'Tie!';
        exit;
    }

    // Change player turns
    $currentPlayer = $currentPlayer === $playerA ? $playerB : $playerA;

    $turns++;
}








