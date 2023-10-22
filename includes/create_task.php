<?php
require "database.php";
require "task.php";

$conn = getDBConnection();

$title = $_POST['title'];
$description = $_POST['description'];
$timeEstimate = $_POST['timeEstimate'];
$assignedTo = $_POST['assignedTo'];

$assignedToId = getUserData($assignedTo, $conn)["id"];
$assignedById = $_SESSION['user_id'];
$stage = 0;

$sql = "INSERT INTO tasks (title, description, time_estimate, assignedTo, assignedBy, stage) VALUES ('$title', '$description', '$timeEstimate', '$assignedToId', '$assignedById', '$stage')";

if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>