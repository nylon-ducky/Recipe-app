<?php
$servername = "localhost";
$username = "zgranny";
$password = "eq86npZf/UymSced";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Select database
$conn -> select_db("a11y");

// Check database
if ($result = $conn -> query("SELECT DATABASE()")) {
    $row = $result -> fetch_row();
    echo "Default database is " . $row[0];
    $result -> close();
  }

?>