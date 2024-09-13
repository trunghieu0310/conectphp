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
$stmt = $connection->prepare('INSERT INTO my_contacts (full_names, gender, contact_no,email ,city,country) values (?, ?,?, ?, ?,?)');

$data = array('Nguyen trung hieu','male','123', 'hieu@live.com', 'thanh hoa','vietnam');
$stmt->execute($data);

?>
