<?php
$dbh = mysqli_connect('localhost', 'root', '123456'); 
// Kết nối tới MySQL server

if (!$dbh)     
die("Unable to connect to MySQL: " . mysqli_connect_error());
// Nếu kết nối thất bại thì đưa ra thông báo lỗi

if (!mysqli_select_db($dbh,'melody'))     
die("Unable to select database: " . mysqli_connect_error());
$sql_stmt = "INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country) 
VALUES ('Poseidon', 'Mail', '541', 'poseidon@sea.oc', 'Troy', 'Ithaca')";
$result = mysqli_query($dbh, $sql_stmt);
if (!$result) {
    die("Database access failed: " . mysqli_error($dbh));
} else {
    echo "Record inserted successfully.";
}
mysqli_close($dbh); // Đóng kết nối CSDL
?>