<?php
// Make folder path
$dir = __DIR__ . "/games";
if (!is_dir($dir)) {
    mkdir($dir, 0755, true);
}

// Step 2: Game data
$data = [
    ['Mario Kart 8', 'Switch', '59.99'],
    ['Zelda: TOTK', 'Switch', '69.99'],
    ['Spider-Man 2', 'PS5', '69.99'],
    ['Forza Horizon', 'Xbox', '59.99']
];

// Step 3: File path
$filename = $dir . "/games.csv";

// Step 4: Open and write
$file = fopen($filename, "wb");
if ($file === false) {
    die("Error opening file.");
}

foreach ($data as $row) {
    fputcsv($file, $row, ',', '"', '\\'); // args to avoid warnings
}

fclose($file);
echo "finished: wrote " . count($data) . " rows to games/games.csv" . PHP_EOL;
