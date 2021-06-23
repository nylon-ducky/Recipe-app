<?php
    
    function callpage ($title) {
        
    require 'connect-to-db.php';
    $sql = "SELECT * FROM `recipes` WHERE title = $title;";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo 
            '<div class="main">' 
            . '<h2 class="titles">' . $row['title'] . '</h2>'
            . '<p class="descriptions">' . $row['description'] . '</p>'
            . '<p class="ingredients">' . 'Ingredients: ' . $row['ingredients'] . '</p>'
            . '<p class="instructions">' .  'Instructions: ' . $row['instructions'] . '</p>' . '</div>';
        }
            require 'deleteEmptyRows.php';

    } else {
            echo "Better Order Out! No recipes found.";
        }

    mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>