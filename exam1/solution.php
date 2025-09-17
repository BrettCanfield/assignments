<?php
/*
  RULES
  - Create each function listed below.
  - Some functions must RETURN a value, others must DISPLAY output directly.
  - Use only built-in date functions for the date task (date, time, strtotime, mktime). Do not use DateTime objects.
  - Keep functions independent. No globals or shared state.

  What to submit:
  - solution.php (this file with your implementations)
*/

/**
 * (P1 – 6 pts) greet
 *
 * Function signature:
 *   greet(string $name [, string $punctuation = "!"]): string
 *
 * Description:
 *   Returns "Aloha, {name}{punctuation}".
 *
 * Parameters:
 *   - string $name: the required name to greet.
 *   - string $punctuation (optional): punctuation to end the greeting. Default is "!".
 *
 * Example:
 *   greet("Markley") → "Aloha, Markley!"
 *   greet("Team", "?") → "Aloha, Team?"
 *
 * Notes:
 *   This function must RETURN the string.
 */

function greet(string $name, string $punctuation = "!") {
  return "Aloha, $name$punctuation";
}

//echo greet("Markley") . PHP_EOL;
//echo greet("Team", "?") . PHP_EOL;

/**
 * (P2 – 6 pts) assoc_to_lines
 *
 * Function signature:
 *   assoc_to_lines(array $assoc): void
 *
 * Description:
 *   Accepts an associative array and DISPLAYS one line per key/value pair
 *   in the form "key: value\n".
 *
 * Example:
 *   ["course"=>"PHP","week"=>"5","topic"=>"arrays"] should display:
 *   course: PHP
 *   week: 5
 *   topic: arrays
 *
 * Parameters:
 *   - array $assoc: the associative array to process.
 *
 * Notes:
 *   This function must DISPLAY the lines directly, not return them.
 */

function assoc_to_lines(array $assoc) {
  foreach ($assoc as $x => $y) {
    echo "$x: $y" . PHP_EOL;
  }
}

//assoc_to_lines(["course"=>"PHP","week"=>"5","topic"=>"arrays"]);

/**
 * (P3 – 6 pts) format_today
 *
 * Function signature:
 *   format_today(): void
 *
 * Description:
 *   DISPLAYS today's date formatted with 'l, F j, Y'.
 *
 * Example:
 *   "Sunday, September 14, 2025"
 *
 * Notes:
 *   Must use built-in date functions (date, time, strtotime, mktime).
 *   Do not use DateTime objects.
 *   This function must DISPLAY the formatted date, not return it.
 */

function format_today(){
  date_default_timezone_set("America/Chicago");
  $timestamp = time();
  $date = date('l, F j, Y', $timestamp);
  echo $date . PHP_EOL;
}

// format_today();

/**
 * (P4 – 5 pts) make_list
 *
 * Function signature:
 *   make_list(): array
 *
 * Description:
 *   Declare three local string variables with these exact values:
 *     $first  = "Zelda"
 *     $second = "Portal"
 *     $third  = "Minecraft"
 *   Add them to a NEW array in that order and RETURN the array.
 */

function make_list(){
  $first  = "Zelda";
  $second = "Portal";
  $third  = "Minecraft";
  $games = [];
  array_push($games, $first, $second, $third);
  return $games;
}

/**
 * (P5 – 4 pts) show_array
 *
 * Function signature:
 *   show_array(array $arr): void
 *
 * Description:
 *   Accepts an array and DISPLAYS the raw contents of the variable in a human-readable way.
 *   Use one of the two built-in PHP functions we covered in class that output the contents
 *   of variables/arrays for inspection.
 *
 * Parameters:
 *   - array $arr: the array to display.
 *
 * Notes:
 *   This function should directly DISPLAY the array, not return a string.
 */

function show_array(array $arr){
  print_r($arr);
}

// show_array(
//   $colors = [
//   'red' => '#FF0000',
//   'green' => '#00FF00',
//   'blue' => '#0000FF'
//   ]
//   );



/**
 * (P6 – 8 pts) loop_sum_to_n
 *
 * Function signature:
 *   loop_sum_to_n(int $n): int
 *
 * Description:
 *   Returns the sum 1 + 2 + … + n using a loop.
 *
 * Example:
 *   loop_sum_to_n(10) → 55
 *
 * Parameters:
 *   - int $n: the maximum value to sum to.
 *
 * Notes:
 *   This function must RETURN the sum as an integer.
 */

function loop_sum_to_n(int $n){
  $z = 0;
  for ($x = 0; $x <= $n; $x++){
    $z = $z + $x;
  }
  return $z;
}

//echo loop_sum_to_n(10);