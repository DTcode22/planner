<?php
require "database.php";

$assignedById = $_COOKIE['user_id'];
if (!isset($assignedById)) {
    echo "<script>alert('Not logged in');</script>";
    header("Location: ../index.php");
    exit;
}
$conn = getDBConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $timeEstimate = $_POST['timeEstimate'];
    $assignedTo = $_POST['assignedTo'];

    $assignedToId = getUserData($assignedTo, $conn)["id"];
    $stage = 0;

    $sql = "INSERT INTO tasks (title, description, time_estimate, assignedTo, assignedBy, stage) VALUES ('$title', '$description', '$timeEstimate', '$assignedToId', '$assignedById', '$stage')";

    if ($conn->query($sql) === FALSE) {
        $errorResponse = array('error' => "Error: " . $sql . "<br>" . $conn->error);
        http_response_code(400);
        echo json_encode($errorResponse);
        exit;
    } else {
        echo getAllTasks($conn);
    }

    $conn->close();
} else {
    $errorResponse = array('error' => 'Invalid request method');
    http_response_code(400);
    echo json_encode($errorResponse);
    exit;
}
?>