<?php
const DB_TYPE = "mysql";
const DB_HOST = "localhost";
const DB_NAME = "melody"; 
const USER_NAME = "root";
const USER_PASSWORD = "123456";

try {
    $connection = new PDO(
        DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME,
        USER_NAME,
        USER_PASSWORD
    );
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Tạo Prepared Statement
    $stmt = $connection->prepare('SELECT full_names, gender FROM my_contacts WHERE full_names = :full_names');

    // Thiết lập kiểu dữ liệu trả về
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Gán giá trị và thực thi
    $stmt->execute(array('full_names' => 'Poseidon'));

    // Hiển thị kết quả
    $rows = $stmt->fetchAll();
    if ($rows) {
        foreach ($rows as $row) {
            echo $row['full_names'] . "\n";
            echo $row['gender'] . "\n";
        }
    } else {
        echo "No results found.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
