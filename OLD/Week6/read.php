<?php
function getData(){

$filename = "stock.csv";
$csvPath = __DIR__ . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . $filename;

// Open the CSV fiel 'stock.cvs' in read binary mode ('rb')

// cheak to see if the file is there
if(!is_file($csvPath)) {
    die("file not found: $filename");
}
$file = fopen($csvPath, 'rb');

// Initialize an empty array to store the CSV data
$stocks = array();

while (!feof($file)){
    // Read a line orm the CSV fiel and covnvert it into an array
    $stock = fgetcsv($file);

    // If the line is false (usually when the fiel ends or theres and error), skip the iteration
    if ($stocks === false) continue;

    // Add the CSV line (now an array) to the stocks array
    $stocks[] = $stock;
}

fclose($file);
return $stocks;

}