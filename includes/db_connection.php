<?php
// Database configuration
$db_host = 'localhost'; // Hostname (usually 'localhost' for local development)
$db_username = 'root'; // MySQL username
$db_password = ''; // MySQL password (leave empty for XAMPP default)
$db_name = 'rsa'; // Name of the database you created

// Create a database connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>