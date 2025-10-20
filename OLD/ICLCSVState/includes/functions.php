<?php

// Custom Helper
function esc_html(string $text): string {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function read_csv_rows($path) {
    // Check if the path is empty
    if (!is_file($path)) {
        return [];
    }

    // Try to open the file in read mode
    $file = fopen($path, 'rb');

    // If fopen() fails return an empty array
    if ($file === false) {
        return [];
    }

    // Create an empty array to store all rows from the CSV
    $rows = [];

    // Keep reading each line until we reach the end of the file
    while (!feof($file)) {
        // fgetcsv() reads one line and turns it into an array
        $row = fgetcsv($file);

        // If fgetcsv() fails skip it
        if ($row === false) continue;

        // Add the line we just read to our list of rows
        $rows[] = $row;
    }

    // Close the file when finished
    fclose($file);

    // Return all the rows
    return $rows;
}
