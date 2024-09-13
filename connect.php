<?php
// Kết nối tới MySQL server
$dbh = mysqli_connect('localhost', 'root', '123456', 'melody'); 

// Kiểm tra kết nối
if (!$dbh) {
    die("Unable to connect to MySQL: " . mysqli_connect_error());
}

// Câu lệnh SELECT
$sql_stmt = "SELECT * FROM my_contacts"; 

// Thực thi câu lệnh SQL
$result = mysqli_query($dbh, $sql_stmt);

// Kiểm tra lỗi thực thi câu lệnh SQL
if (!$result) {
    die("Database access failed: " . mysqli_error($dbh));
}

// Lấy số hàng trả về
$rows = mysqli_num_rows($result); 

// Hiển thị kết quả nếu có dữ liệu
if ($rows > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo 'ID: ' . $row['id'] . '<br>';         
        echo 'Full Names: ' . $row['full_names'] . '<br>';        
        echo 'Gender: ' . $row['gender'] . '<br>';         
        echo 'Contact No: ' . $row['contact_no'] . '<br>';         
        echo 'Email: ' . $row['email'] . '<br>';         
        echo 'City: ' . $row['city'] . '<br>';         
        echo 'Country: ' . $row['country'] . '<br><br>';     
    } 
} else {
    echo "No records found.";
}

// Đóng kết nối CSDL
mysqli_close($dbh);
?>
