<?php
    $csvPath = __DIR__ . "/data/stock.csv";
    require __DIR__ . "/read.php";
    $aryStocks = getData();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($aryStocks as $stocks){
            echo("<p>$stocks[0] $stocks[1] $stocks[2] </p>");
        }
    ?>
    
</body>
</html>