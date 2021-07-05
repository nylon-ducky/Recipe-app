<?php
    require 'connect-to-db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link defer rel="stylesheet" type="text/css" href="style.php" media="screen">
    
    <title>Add Recipe</title>
</head>

<body>
    <!-- NAV BAR -->
    <nav>
        <a href="index.php">Home</a>
        <a href="addRecipe.php">Add Recipe</a>
    </nav>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
        <br />

        <label for="photoinput">Photo:</label>
        <!-- USER FILE (PHOTO) -->
        <input type="hidden" name="max-file-size" value="30000">
        <input type="file" name="pics" id="photoinput">
        
        <br/>
        <label for="ingredients">Ingredients</label><br />
        <textarea name="ingredients" rows="15" cols="30"></textarea><br />
        <label for="instructions">Instructions</label><br />
        <textarea name="instructions" rows="15" cols="30"></textarea><br />
        <label for="description">Description</label><br />
        <textarea name="description" rows="15" cols="30"></textarea><br />

        <button type="submit" value="submit" name="submit">SUBMIT</button>

    </form>

</body>

</html>
