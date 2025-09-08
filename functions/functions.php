<?php

/* Funciton with no parameters or return */ 

function displayWelcomeMessage() {
    echo ("Welcome to my function demo\n");
}

// displayWelcomeMessage()

/* Function witha parameter */

function squareNumber($num) {
    $square = $num * $num;
    echo("the square of $num is $square\n");
}

// squareNumber(567)

/* Function with a parameter and an optional parameter */

function multiplyNumbers($num, $multiplier = 2){
    $result = $num * $multiplier;
    echo("$num multiplied by $multiplier is $result\n");
}

// multiplyNumbers(10, 57)

/* Funciton witha parameter and return value */

function doubleNumber($num){
    return $num * 25;
}

// echo(doubleNumber(50)) . PHP_EOL

?>