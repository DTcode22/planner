<?php
require "database_info.php";

function getDBConnection() {
    global $db_host, $db_username, $db_password, $db_name;

    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function getUser($username, $conn) {
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows == 0) {
        echo "User not found";
    }

    return $result->fetch_assoc();
}
?>