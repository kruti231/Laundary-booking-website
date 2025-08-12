<?php
include 'db.php';

// Read form data safely
$name     = $_POST['name'] ?? '';
$address  = $_POST['address'] ?? '';
$number   = $_POST['number'] ?? '';
$service  = $_POST['service'] ?? '';
$quantity = $_POST['quantity'] ?? '';
$date     = $_POST['date'] ?? '';

// Insert booking 
$sql_booking = "INSERT INTO booking (name, number, address, service, quantity, date)
                VALUES ('$name', '$number', '$address', '$service', '$quantity', '$date')";

if ($conn->query($sql_booking) === TRUE) {
    echo "✅ Booking Successful!";
} else {
    echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
