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


// Retrieve user data from the HTML form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password']; // Note: You should hash and secure the password

// Example of hashing the password using PHP's password_hash function
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// SQL query to insert user data into the database
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>