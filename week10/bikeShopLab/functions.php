<?php
$DB_HOST = 'localhost';
$DB_NAME = 'bike_shop';
$DB_USER = 'root';
$DB_PASS = '';

function db() {
    global $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS;

    $dsn = "mysql:host={$DB_HOST};dbname={$DB_NAME}";

    try {
        $pdo = new PDO($dsn, $DB_USER, $DB_PASS);
        echo "Connected successfully!";
    } catch (PDOException $e)
    {
        
        echo ($e->getMessage());
    }

    return $pdo;
}

db();

// 1. Show all customers, sorted by last_name, then first_name.
function sqlAllCustomers(): string {
    return "SELECT last_name, first_name FROM customers ORDER BY last_name, first_name ASC";
}

// 2. Show all bikes that are available.
function sqlAvailableBikes(): string {
    return "SELECT model FROM bikes JOIN rentals ON bikes.bike_id=rentals.bike_id WHERE end_time IS NOT NULL";
}

// 3. Show which bike is rented by which customer (JOIN).
function sqlBikeRentals(): string {
    return "SELECT model, first_name, last_name FROM bikes 
            JOIN rentals ON bikes.bike_id=rentals.bike_id 
            JOIN customers ON rentals.customer_id=customers.customer_id";
}

// 4. Show all rentals with start_time before noon.
function sqlMorningRentals(): string {
    return "SELECT * FROM rentals WHERE start_time BETWEEN '00:00:00' and '12:00:00'";
}

// 5. Show the top 3 most expensive bikes (hint: ORDER BY and LIMIT).
function sqlTop3Bikes(): string {
    return "SELECT * FROM bikes ORDER BY hourly_rate DESC LIMIT 3";
}

// 6. Show all open rentals (where end_time IS NULL).
function sqlOpenRentals(): string {
    return "SELECT * FROM rentals WHERE end_time IS NULL";
}

// 7. Show a multiple JOIN query (bikes → rentals → customers).
function sqlAllJoins(): string {
    return "SELECT * FROM bikes 
            JOIN rentals ON bikes.bike_id=rentals.bike_id 
            JOIN customers ON rentals.customer_id=customers.customer_id";
}

// 8. Update the end_time for the first rental using NOW().
function sqlUpdateEndTime($rentalId): string {
    $id = (int)$rentalId;
    return "UPDATE rentals SET end_time = NOW() WHERE rental_id = $id";
}

// 9. Update the available status of a bike to 0 (rented) by bike_id.
function sqlUpdateBikeStatus($bikeId): string {
    $id = (int)$bikeId;
    return "UPDATE bikes SET available = 0 WHERE bike_id = $id";
}