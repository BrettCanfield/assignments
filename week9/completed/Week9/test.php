<?php
 $DB_HOST = 'localhost';
    $DB_NAME = 'introtodb';
    $DB_USER = 'root';
    $DB_PASS = '';
    // Data Source Name akd dsn

    $dsn="mysql:host=$DB_HOST; dbname=$DB_NAME";
   

    try {
       
        echo ("Connetcted");
        $pdo = new PDO($dsn, $DB_USER, $DB_PASS);

        $sql = "Select * from games ORDER BY title";
        $stmt = $pdo->query($sql);
        print_r($stmt);
        // $rs = $stmt->fetchAll();
        // print_r($rs); 
        while($row = $stmt->fetch())
        {
            echo $row['title'] . "<br>";
        }



    } catch (PDOException $e)
    {
        
        echo ($e->getMessage());
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>