<?php

// date_default_timezone_set("America/Chicago");

function showNow(){
    $timeStamp = time();
    $todaysDate = date('m-d-Y h:i', $timeStamp);
    echo("$timeStamp $todaysDate") . PHP_EOL;
}

// showNow();

function showStringDate($str){
    $enteredDateTime = strtotime($str);
    $date = date('m-d-Y h:i', $enteredDateTime);
    echo($date) . PHP_EOL;
}

// showStringDate(2025-12-25);
// showStringDate("next Friday");

function showFourthOfJuly(){
    $fourth = mktime(9 , 0, 0, 7, 4, 2026);
    $date = date('m-d-Y h:i', $fourth);
    echo($date) . PHP_EOL;
}

// showFourthOfJuly();

function addThirtyDaysBySeconds(){
    $daysIntoSeconds = 30 * 24 * 60 * 60;
    $timeStamp = time() + $daysIntoSeconds;
    $date = date('m-d-Y h:i', $timeStamp);
    echo($date) . PHP_EOL;
}

// addThirtyDaysBySeconds();

function addOneYearRelative(){
    $timeStamp = time();
    $futrueTimeStamp = strtotime("+365 days", $timeStamp);
    $futureDate = date('m-d-Y h:i', $futrueTimeStamp);
    echo($futureDate) . PHP_EOL;
}

// addOneYearRelative();

function showCentralTime(){
    $timeStamp = time();
    $date = date('m-d-Y h:i', $timeStamp);
    echo($date) . PHP_EOL;
    $defTimeZone = date_default_timezone_set("America/Chicago");
    $date2 = date('m-d-Y h:i', $timeStamp);
    echo($date2) . PHP_EOL;
}

//showCentralTime();