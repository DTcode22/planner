<?php
require "database.php";

$conn = getDBConnection();

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($query);

$user = getUserData($username, $conn);
$hashed_password = $user['password'];

if (password_verify($password, $hashed_password)) {
    setcookie('username', $username, time() + (86400 * 30), "/"); // Set cookie for 30 days
    setcookie('user_id', $user['id'], time() + (86400 * 30), "/"); // Set cookie for 30 days

    header('Location: ../pages/dashboard.php');
    exit();
} else {
    echo "Invalid password";
}

$conn->close();
?>