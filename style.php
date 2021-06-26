* {
    box-sizing: border-box;
}

body {
    width: 100vw;
    height: 100vh;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}

.noshow {
    display: none;
}

#searchGroup {
    height: 40px;
    width: fit-content; 
    margin: 10px auto;
}

#cart {
    position: absolute;
    top: 10px;
    right: 10px;
}

nav {
    display: flex;
    justify-content: space-evenly;
    margin: 15px;
}

.chef {
    position: relative;
    width: 800px;
    margin: 0;
    float: right;
}
.holder {
    width: 98.2vw;
    height: 465px;
    margin: 0;
    background-color: rgb(225,81,11);
    border: 7px solid rgb(225,81,11);
}
.left {
    font-family: "Brush Script MT", cursive;
    font-weight: bold;
    font-size: 40px;
}


/* RECIPES */

.recipeCard {
    margin: 4vw; 
    width: 40vw;
    border: 2px solid black;
    border-radius: 25px;
    padding: 2vw;
    float: left;
    box-shadow: 0 4px 8px 0 grey;
    transition: 0.2s;
}

.recipeCard:hover {
  box-shadow: 0 8px 16px 0 grey;
}

.titles {
    font-size: 30px;
    margin: 0;
}

.main {
    width: fit-content;
    margin: auto;
}

.pics {
    width: 50px;
    height: 50px;
}

