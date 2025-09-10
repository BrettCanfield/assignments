<?php

date_default_timezone_set("America/Chicago");

function todaysDate (){
    $timeStamp = time();
    echo($timeStamp). PHP_EOL;
    $todaysDate = date('m-d-Y h:i', $timeStamp);
    echo($todaysDate) . PHP_EOL;
}

function calculateFutureDate($daysToAdd=0){
    $timeStamp = time();
    $futrueTimeStamp = strtotime("+$daysToAdd days", $timeStamp);
    $futureDate = date('Y-m-d: D', $futrueTimeStamp);
    echo($futureDate) . PHP_EOL;
}

calculateFutureDate(20000);

//todaysDate();