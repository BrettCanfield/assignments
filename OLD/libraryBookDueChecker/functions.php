<!-- 
Library Book Due Checker 
Brett Canfield
-->

<?php
// Takes two date values, compares them and returns euqal, overdue, or remaining with the time difference
function check_due($returnDate, $dueDate) {

    // Turns the parameters into date values
    $r = date_create($returnDate);
    $d = date_create($dueDate);

    // Difference between two dates
    $diff   = date_diff($r, $d);

    //Pulls out the parts of the dates, y for years, m for months and d for days
    $years  = (int)$diff->y;
    $months = (int)$diff->m;
    $days   = (int)$diff->d;

    // Checks if there is a calendar difference, if not then it returns 0 time difference
    if ($years === 0 && $months === 0 && $days === 0) {
        return [
        'status' => 'equal',
        'years'  => 0,
        'months' => 0,
        'days'   => 0
        ];
    }

    // Checks if the book is overdue or time remaining
    $status = (strtotime($returnDate) > strtotime($dueDate)) ? 'overdue' : 'remaining';

    // Returns the status of the book and the time difference
    return [
        'status' => $status,
        'years'  => $years,
        'months' => $months,
        'days'   => $days
    ];
}
