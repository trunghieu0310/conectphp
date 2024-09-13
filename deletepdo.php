<?php
const DB_TYPE = "mysql";
const DB_HOST = "localhost";
const DB_NAME = "melody"; 
const USER_NAME = "root";
const USER_PASSWORD = "123456"; 
$connection = new PDO(
    DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME,
    USER_NAME,
    USER_PASSWORD
);
$stmt = $connection->prepare('DELETE FROM my_contacts WHERE full_names = :full_names');
$stmt->bindParam(':full_names', $full_names);
$full_names = 'Zeus';
$stmt->execute();
if ($stmt->rowCount() > 0) {
    echo "Record deleted successfully.";
} else {
    echo "No records found to delete.";
}