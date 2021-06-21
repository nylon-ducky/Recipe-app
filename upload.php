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
BUG LIST:
    cant use apostrophie in the query data.



http://localhost/projects/a11y/a11y/upload.php
http://localhost/phpmyadmin/index.php?route=/table/structure/save
https://www.tutorialrepublic.com/php-tutorial/php-mysql-insert-query.php
https://www.geeksforgeeks.org/how-to-insert-form-data-into-database-using-php/
https://makitweb.com/make-destination-directory-on-file-upload-with-php/
*/
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Recipe Added</title>
 </head>
 <body>
     <!-- NAV BAR -->
     <nav>
        <a href="index.php">Home</a>
        <a href="addRecipe.php">Add Recipe</a>
    </nav>
   <p>Thanks for contributing!</p>
 </body>
 </html>