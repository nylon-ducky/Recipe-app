<?php
require 'connect-to-db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- REACT CDN's 
    <script crossorigin src="https://unpkg.com/react@17/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>-->

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- MY STYLE -->
    <link defer rel="stylesheet" type="text/css" href="style.php" media="screen">

    <!-- MAIN SCRIPT 
    <script src="app,js"></script>
    -->
    
    <!-- TITLE -->
    <title>My A11Y Recipe</title>

</head>

<body id="home">


    <!-- BURGER MENU -->
    <i class="fas fa-bars noshow" id="bm"></i>

    <!-- SEARCH BAR -->
    <div id="searchGroup">
        <input type="text" name="sBar" id="sBar">
        <button name="sButton" onclick="getRecipes()" value="sButton" id="sButton">Search</button>
    </div>

    <!-- SHOPPING CART -->
    <img id="cart" src="pictures/dinner-2814566_640.png">

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
    <div class="main" id="main">
        <?php
        include 'displayRecipes.php';
        ?>
    </div>

    <script>    

            let search = document.getElementById('sBar');

            search.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
            event.preventDefault();
            getRecipes();
            }
            });
let main = document.querySelector('#main');
    async function getRecipes() {

        


        let search = document.getElementById('sBar').value;


        const edamam = "https://edamam-recipe-search.p.rapidapi.com/search?q=" + search;
        const methodhead = {
	    "method": "GET",
	    "headers": {
		"x-rapidapi-key":"f8cbcb031fmsh979210ec5d6e31ep1ffebajsn419b34dc4aac",
		"x-rapidapi-host": "edamam-recipe-search.p.rapidapi.com"
	        }
        };


        const response = await fetch(edamam, methodhead);

        const data = await response.json();

        console.log(data.hits[2]);
        console.log(data.hits);

        for (x in data.hits) {
            let E = document.createElement('div');
            E.classList.add("recipeCard");
            //let main= document.getElementsByClassName('main');
            //document.body.appendChild(E);
            main.appendChild(E);
            

            let recipes = data.hits[x].recipe;
            

            let title = document.createElement('h6');
            title.classList.add("titles");
            title.innerHTML = recipes.label;
            E.appendChild(title);


            let picture = new Image;
            picture.classList.add("pics");
            picture.src = recipes.image;
            picture.alt = search + " recipe from: " + recipes.url;
            E.appendChild(picture);


            let description = document.createElement('p');
            description.classList.add("descriptions");      
            let HL = [];
                for (L = 0; L < recipes.healthLabels.length; L++) {

                HL.push(" <br>" + recipes.healthLabels[L] );
                }
            description.innerHTML = "Serves: " + recipes.yield + "<br><br>" + "Suitable for those who are: " + HL;
            E.appendChild(description);


            let ingredients = document.createElement('p');
            ingredients.classList.add("ingredients");
            ingredients.innerHTML = "Ingredients: <br>";
                let il = recipes.ingredientLines;
                for (i = 0; i < il.length; i++) {
                    //console.log(il[i]);
                    ingredients.innerHTML = ingredients.innerHTML + il[i] + "<br>";
                }
            //ingredients.innerHTML = "ingredients: <br>" + recipes.ingredientLines;
            E.appendChild(ingredients);


                let url = recipes.url;
                console.log(url);
            let instructions = document.createElement('p');
            instructions.classList.add('instructions');
            instructions.innerHTML = 'To view the whole recipe please visit <a href="' + url + '"> the original creator\'s website</a>.'
                    E.appendChild(instructions);

        }
    }

</script>

</body>

</html>