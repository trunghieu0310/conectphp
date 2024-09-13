<?php
$dbh = mysqli_connect('localhost', 'root', '123456'); 
// Kết nối tới MySQL server

if (!$dbh)     
die("Unable to connect to MySQL: " . mysqli_connect_error());
// Nếu kết nối thất bại thì đưa ra thông báo lỗi

if (!mysqli_select_db($dbh,'melody'))     
die("Unable to select database: " . mysqli_connect_error());
$sql_stmt = "UPDATE `my_contacts` SET `contact_no` = '788',`email` = 'poseidon@ocean.oc'";
    $sql_stmt .= "WHERE `id` = 5";
    
    $result = mysqli_query($dbh,$sql_stmt);
    // Thực thi câu lệnh SQL

    if (!$result) {
        die("Deleting record failed: " . mysqli_connect_error());
        // Thông báo lỗi nếu thực thi thất bại
    } else {
        echo "ID number 5 has been successfully updated";
    }
    
    mysqli_close($dbh); //close the database connection


?>