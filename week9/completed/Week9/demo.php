<?php

    $DB_HOST = 'localhost';
    $DB_NAME = 'introtodbs';
    $DB_USER = 'root';
    $DB_PASS = '';

    // Data Source Name akd dsn

    $dsn="mysql:host=$DB_HOST; dbname=$DB_NAME";
   

    try {
       
        echo ("Connetcted");
        $pdo = new PDO($dsn, $DB_USER, $DB_PASS);
    } catch (PDOException $e)
    {
        
        echo ($e->getMessage());
    }

