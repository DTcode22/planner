<?php
// Include the database connection file (db_connection.php)
include 'db_connection.php';

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