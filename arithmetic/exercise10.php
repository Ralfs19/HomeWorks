<?php

    class Geomentry
    {
        public static function cRadius($radius)
        {
            if ($radius < 0){
                return "Don't use negative numbers";
            }
            return M_PI * $radius * 2;
        }

        public static function rArea($lenght, $width){
            if ($lenght < 0 && $width < 0){
                return "Don't use negative numbers";
            }
            return $lenght * $width;
        }

        public static function tArea($baseLenght, $height){
            if ($baseLenght < 0 && $height < 0){
                return "Don't use negative numbers";
            }
            return $baseLenght * $height * 0.5;
        }
    }






$geoNames = [
    "Calculate the Area of a Circle",
    "Calculate the Area of a Rectangle ",
    "Calculate the Area of a Triangle ",
    "Quit"
];

$input = (int) readline('Geometry calculator: ');
echo PHP_EOL;

for ($i = 0; $i < count($geoNames); $i++){
    echo $geoNames[$i];
    echo PHP_EOL;
}

$input1 = (int) readline("Enter your choise (1-4)");
echo PHP_EOL;

if ($input1 == 1){
    echo "Enter radius: ";
    echo Geomentry::cRadius(readline());
    echo PHP_EOL;
    exit;
}
if ($input1 == 2){
    echo "Enter lenght and width: ";
    echo Geomentry::rArea(readline(), readline());
    echo PHP_EOL;
    exit;
}
if ($input1 == 3){
    echo "Enter triangle’s base and the triangle’s height: ";
    echo PHP_EOL;
    echo Geomentry::tArea(readline(), readline()) . "Result";
    echo PHP_EOL;
    exit;
}
if ($input1 == 4){
    echo exit;
}

if ($input1 > 4){
    echo "Only 1-4 can enter.";
}


echo PHP_EOL;





