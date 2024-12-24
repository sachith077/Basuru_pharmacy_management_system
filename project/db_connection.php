<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pharmacy_sys";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Close the connection (optional)
$conn->close();
?>
