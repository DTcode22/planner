<?php
require "database_info.php";

function getDBConnection()
{
    global $db_host, $db_username, $db_password, $db_name;

    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>