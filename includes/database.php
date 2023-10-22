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

function getUserData($username, $conn) {
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows == 0) {
        echo "User not found";
    }

    return $result->fetch_assoc();
}

function getUserDataById($id, $conn) {
    $query = "SELECT * FROM users WHERE id = '$id'";
    $result = $conn->query($query);

    if ($result->num_rows == 0) {
        echo "User not found";
    }

    return $result->fetch_assoc();
}

function getTaskData($id, $conn) {
    $query = "SELECT * FROM tasks WHERE id = '$id'";
    $result = $conn->query($query);

    if ($result->num_rows == 0) {
        echo "Task not found";
    }

    return $result->fetch_assoc();
}

function getAllTasks($conn) {
    $query = "SELECT * FROM tasks";
    $result = $conn->query($query);

    if ($result->num_rows == 0) {
        echo "No tasks found";
    }

    $tasks = array();

    while ($row = $result->fetch_assoc()) {
        $tasks[] = $row;
    }

    return json_encode($tasks);
}
?>