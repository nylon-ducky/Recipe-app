<?php
    require 'connect-to-db.php';

    $sql = "SELECT * FROM `recipes`";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo 
            '<div class="recipeCard">' 
            . $row['title'] . '<br/>'
            . $row['description'] . '<br/>'
            . 'Ingredients: ' . $row['ingredients'] . '<br/>'
            . 'Instructions: ' . $row['instructions'] . '</div>';
        }

    } else {
            echo "Better Order Out! No recipes found.";
        }

    mysqli_close($conn);