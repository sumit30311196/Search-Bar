<?php

$server = "localhost";
$username = "root";
$password = "mysql";
$database = "search";

$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

?>