<?php

require "database.php";

$username = $_POST['username'];
$password = $_POST['password'];

$conn = getDBConnection();

$query = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    $hashed_password = $user['password'];

    if (password_verify($password, $hashed_password)) {
        session_start();

        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $user['id'];

        header('Location: placeholder.php');
        exit();
    } else {
        echo "Invalid password";
    }
} else {
    echo "User not found";
}

$conn->close();
?>