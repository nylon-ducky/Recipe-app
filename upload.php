<?php
require 'connect-to-db.php';

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$title = $_POST["title"];
$img = $_POST["img"];
$ingredients = $_POST["ingredients"];
$instructions = $_POST["instructions"];
$description = $_POST["description"];

$sql = "INSERT INTO recipes (title, photo, ingredients, instructions, description) VALUES ($title, $img, $ingredients, $instructions, $description)";

if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
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

