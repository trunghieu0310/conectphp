<?php
try {
    $connection = new PDO(
        "mysql:host=localhost;dbname=melody",
        "root",
        "123456"
    );
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $connection->prepare('UPDATE my_contacts SET contact_no = :contact_no, email = :email WHERE full_names = :full_names');
    $stmt->bindParam(':contact_no', $contact_no);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':full_names', $full_names);

    $contact_no = '785';
    $email = 'poseidon@ocean.oc';
    $full_names = 'Zeus';

    $stmt->execute();
    echo $stmt->rowCount() . " row(s) updated.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
