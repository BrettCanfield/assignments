<!---- 
SELECT last_name, first_name FROM customers ORDER BY last_name, first_name ASC

SELECT model FROM bikes JOIN rentals ON bikes.bike_id=rentals.bike_id WHERE end_time IS NOT NULL 

SELECT model, first_name, last_name FROM bikes 
JOIN rentals ON bikes.bike_id=rentals.bike_id 
JOIN customers ON rentals.customer_id=customers.customer_id;

SELECT * FROM rentals WHERE start_time BETWEEN '00:00:00' and '12:00:00';

SELECT * FROM bikes ORDER BY hourly_rate DESC LIMIT 3;

SELECT * FROM rentals WHERE end_time IS NULL

SELECT * FROM bikes 
JOIN rentals ON bikes.bike_id=rentals.bike_id 
JOIN customers ON rentals.customer_id=customers.customer_id;