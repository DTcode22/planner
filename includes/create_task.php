<?php
require "database.php";

$conn = getDBConnection();

$title = $_POST['title'];
$description = $_POST['description'];
$timeEstimate = $_POST['timeEstimate'];
$assignedTo = $_POST['assignedTo'];

$assignedToId = getUserData($assignedTo, $conn)["id"];
$assignedById = $_COOKIE['user_id'];

if (isset($assignedById)) {
    echo "<script>alert('Not logged in');</script>";
    header("Location: ../index.php");
}
$stage = 0;

$sql = "INSERT INTO tasks (title, description, time_estimate, assignedTo, assignedBy, stage) VALUES ('$title', '$description', '$timeEstimate', '$assignedToId', '$assignedById', '$stage')";

if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>