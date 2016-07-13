<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tech_test";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection_aborted
if ($conn->connect_error) {
  die("Connection failed: " . $conn->error);
}
?>
