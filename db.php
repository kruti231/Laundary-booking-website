<?php
$servername = "localhost";
$username = "root"; // default XAMPP username
$password = "Krutti@234";     // default XAMPP password is empty
$dbname = "laundary";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
