<?php

$words = [
    'lemon',
    'dog',
    'cat'
];

$word = $words[array_rand($words)];
$letters = str_split($word);
$correctWord = str_split(str_repeat('_', strlen($word)));

echo implode('', $correctWord);
echo PHP_EOL;

$gueses = 0;
$maxGueses = strlen($word) + 3;



while ($gueses < $maxGueses && in_array('_', $correctWord))
{
    $letter = readline('Word: ');
    echo PHP_EOL;
    $miss = [];
    $letterPosition = array_keys($letters, $letter);


    if(count($letterPosition) > 0){
        foreach ($letterPosition as $position){
            $correctWord[$position] = $letter;
        }
    }



    echo  implode('', $correctWord);
    echo PHP_EOL;

}



var_dump($miss);
echo in_array('_', $correctWord) ? 'You lose' : 'You win!';
echo PHP_EOL;

echo PHP_EOL;

