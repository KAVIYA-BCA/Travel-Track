<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "restaurant_booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>