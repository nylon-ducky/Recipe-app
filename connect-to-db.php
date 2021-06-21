<?php
$servername = "localhost";
$username = "zgranny";
$password = "eq86npZf/UymSced";
$dbname = "a11y";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Select database
$conn -> select_db($dbname);

// Check database
if ($result = $conn -> query("SELECT DATABASE()")) {
    $row = $result -> fetch_row();
    $result -> close();
  }

?>