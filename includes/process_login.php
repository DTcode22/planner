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
    session_start();

    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $user['id'];

    header('Location: ../pages/dashboard.php');
    exit();
} else {
    echo "Invalid password";
}

$conn->close();
?>