<?php
require 'connect-to-db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- MY STYLE -->
    <link defer rel="stylesheet" type="text/css" href="style.php" media="screen">

    <!-- MAIN SCRIPT -->
    <script defer src="app,js"></script>

    <!-- TITLE -->
    <title>My A11Y Recipe</title>

</head>

<body id="home">


    <!-- BURGER MENU -->
    <i class="fas fa-bars noshow" id="bm"></i>

    <!-- SEARCH BAR -->
    <div id="searchGroup">
        <input type="text" name="sBar" id="sBar">
        <button name="sButton">Search</button>
    </div>

    <!-- SHOPPING CART -->
    <i class="fas fa-shopping-cart" id="cart"></i>

    <!-- NAV BAR -->
    <nav>
        <a href="index.php">Home</a>
        <a href="addRecipe.php">Add Recipe</a>
    </nav>

    <div class="holder">
        
        <img class="chef" src="https://www.reshot.com/preview-assets/illustrations/5SL8QE7BTV/chefs-preparing-pizza-5SL8QE7BTV-w1600.jpg"> 
        <p class="left">Easy as pie!</p>
    </div>

    <!-- RECIPES -->
    <div class="main">
        <?php
        include 'displayRecipes.php';
        ?>
    </div>

</body>

</html>
