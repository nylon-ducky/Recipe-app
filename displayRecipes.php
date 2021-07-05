<?php
    require 'connect-to-db.php';

    $sql = "SELECT * FROM `recipes`;";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            
            echo 
            '<div class="recipeCard" tabindex="0">' 
            . '<h6 class="titles">' . $row['title'] . '</h6>'
            . '<img src="' . $row['picture'] . '" class="pics">'
            . '<p class="descriptions">' . $row['description'] . '</p>'
            . '<p class="ingredients">' . 'Ingredients: <br/> ' . $row['ingredients'] . '</p>'
            . '<p class="instructions">' .  'Instructions: <br/> ' . $row['instructions'] . '</p>' . '</div>';
        
        }
            require 'deleteEmptyRows.php';
            

    } else {
            echo "Better Order Out! No recipes found.";
        }

    mysqli_close($conn);