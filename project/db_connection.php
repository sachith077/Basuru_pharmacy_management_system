<?php
$servername = "localhost";
$username = "root";
$password = "your_password";
$dbname = "your_database";

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
