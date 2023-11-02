<?php
require "database.php";
if (!isset($assignedById)) {
    echo "<script>alert('Not logged in');</script>";
    header("Location: ../index.php");
}
$conn = getDBConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $timeEstimate = $_POST['timeEstimate'];
    $assignedTo = $_POST['assignedTo'];

    $assignedToId = getUserData($assignedTo, $conn)["id"];
    $assignedById = $_COOKIE['user_id'];
    $stage = 0;

    // Insert the data into the database (you should use prepared statements for security)
    $sql = "INSERT INTO tasks (title, description, time_estimate, assignedTo, assignedBy, stage) VALUES ('$title', '$description', '$timeEstimate', '$assignedToId', '$assignedById', '$stage')";

    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } else {
        echo getAllTasks($conn);
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request";
}
?>