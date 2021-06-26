<?php
require 'connect-to-db.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$title = addslashes($_POST['title']);
$ingredients = addslashes($_POST['ingredients']);
$instructions = addslashes($_POST['instructions']);
$description = addslashes($_POST['description']);

$target = "pictures/";
if(!is_dir($target)) mkdir($target);
$target = $target . basename( $_FILES['pics']['name']); 

$pics = $_FILES['pics'];
$ufname = ($_FILES['pics']['name']);
echo $target ;
$tmpName  = $_FILES['pics']['tmp_name'];
$ufSize = $_FILES['pics']['size'];
$ufType = $_FILES['pics']['type'];
$ufError = $_FILES['pics']['error'];
$fp = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

  
if(move_uploaded_file($_FILES['pics']['tmp_name'], $target)) { 

  //Tells you if its all ok 
 echo "The file ". basename( $_FILES['pics']['name']). " has been uploaded, and your information has been added to the directory. "; 
} 
   else { 
 
          //Gives and error if its not 
  echo "Sorry, there was a problem uploading your file."; 
} 




$sql="INSERT INTO recipes (title, picture, ingredients, instructions, description) VALUES ('$title', '$target' ,'$ingredients', '$instructions', '$description')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
 
/*
BUG LIST:



http://localhost/projects/a11y/a11y/index.php
http://localhost/phpmyadmin/index.php?route=/table/structure
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