<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add Recipe</title>
</head>
<body>

<form action="upload.php" method="POST" enctype="multipart/form-data">
<label for="title">Title:</label>
<input type="text" id="title" name="title">
<br/>
<label for="ingredients">Ingredients</label><br/>
<textarea name="ingredients" rows="15" cols="30"></textarea><br/>
<label for="instructions">Instructions</label><br/>
<textarea name="instructions" rows="15" cols="30"></textarea><br/>
<label for="description">Description</label><br/>
<textarea name="description" rows="15" cols="30"></textarea><br/>

<button type="submit" value="submit" name="submit">SUBMIT</button>

</form>
    
</body>
</html>