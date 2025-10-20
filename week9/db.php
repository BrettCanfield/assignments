<?php
$DB_HOST = 'localhost';
$DB_NAME = 'intro_to_db';
$DB_USER = 'root';
$DB_PASS = 'root';
$dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;port=8889";
 
try {
    $pdo = new PDO($dsn, $DB_USER, $DB_PASS);
    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}