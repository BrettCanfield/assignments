<?php
/*
  RULES
  - Create each function listed below.
  - Some functions must RETURN a value, others must DISPLAY output directly.
  - Keep functions independent. No globals or shared state.

  What to submit:
  - functions.php (this file with your implementations)
*/

/**
 * (P1 – 5 pts) greet_fullname
 *
 * Function signature:
 *   greet_fullname(string $first [, string $last = "Not provided"]): string
 *
 * Description:
 *   Returns "Hello, {first} {last}".
 *
 * Examples:
 *   greet_fullname("John", "Smith") → "Hello, John Smith"
 *   greet_fullname("Alice") → "Hello, Alice Not provided"
 *
 * Notes:
 *   This function must RETURN the string, not echo.
 */

function greet_fullname($first, $last = "Not provided"){
  if ($last == "Not provided"){
    return "Hello, $first";
  } else {
    return "Hello, $first $last";
  }
}

$myString = greet_fullname("Brett", "Canfield");
$myStringTwo = greet_fullname("Brett");
echo $myString . PHP_EOL;
echo $myStringTwo . PHP_EOL;



/**
 * (P2 – 5 pts) echo_colors
 *
 * Function signature:
 *   echo_colors(): void
 *
 * Description:
 *   Create an associative array named $colors with keys "red", "green", "blue"
 *   and values set to their hex codes:
 *     red   → #FF0000
 *     green → #00FF00
 *     blue  → #0000FF
 *
 *   Loop through the array and DISPLAY each pair as "key: value", one per line.
 *
 * Example (displayed):
 *   red: #FF0000
 *   green: #00FF00
 *   blue: #0000FF
 *
 * Notes:
 *   This function should DISPLAY output directly (echo/print), not return a value.
 */



function echo_colors(){
  $colors = [
  'red' => '#FF0000',
  'green' => '#00FF00',
  'blue' => '#0000FF'
  ];

  foreach($colors as $x => $y){
    echo("$x : $y" . PHP_EOL);
  }
}

echo_colors();