<?php
$days = readline("Enter one day of week: ");

switch ($days){
    case 1:
        echo "Monday";
        echo PHP_EOL;
        break;
    case 2:
        echo "Tuesday";
        echo PHP_EOL;
        break;
    case 3:
        echo "Wednesday";
        echo PHP_EOL;
        break;
    case 4:
        echo "Thursday";
        echo PHP_EOL;
        break;
    case 5:
        echo "Friday";
        echo PHP_EOL;
        break;
    case 6:
        echo "Saturday";
        echo PHP_EOL;
        break;
    case 7:
        echo "Sunday";
        echo PHP_EOL;
        break;
    default:
        echo "Not a valid day";
        echo PHP_EOL;

}