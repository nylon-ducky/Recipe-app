<?php
require 'connect-to-db.php';
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

$title = $_POST['title'];
$ingredients = $_POST['ingredients'];
$instructions = $_POST['instructions'];
$description = $_POST['description'];

$sql="INSERT INTO recipes (title, ingredients, instructions, description) VALUES ('$title', '$ingredients', '$instructions', '$description')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
 
/*
$target_dir = "recipes/";
$target_file = $target_dir . basename($_FILES[$img]["name"]);
?>


http://localhost/projects/a11y/a11y/upload.php
http://localhost/phpmyadmin/index.php?route=/table/structure/save
https://www.tutorialrepublic.com/php-tutorial/php-mysql-insert-query.php
https://www.geeksforgeeks.org/how-to-insert-form-data-into-database-using-php/
https://makitweb.com/make-destination-directory-on-file-upload-with-php/
*/
 ?>
