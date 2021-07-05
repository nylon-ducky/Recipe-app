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

    width: 50px;
    height: 40px;


}

nav {
    display: flex;
    justify-content: space-evenly;
    margin: 15px 0;

    background-color: rgb(225,81,11);

    font-weight: bold;

    padding: 5px;


}

nav a {
    color: white;
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
    margin: 4vw auto; 
    width: 80vw;
    height: 50vh;
    border: 2px solid black;
    font-weight: bold;
    padding: 2vw 2vw 0 2vw;
    
    box-shadow: 0 4px 8px 0 grey;
    
    transition: 0.2s;
    
    overflow: auto;
    
}



.recipeCard:hover {
  box-shadow: 0 0 16px 5px grey;
  width: 82vw;
  height: 52vh;
  
  font-size: 1.2em;
}

.titles {
    font-size: 30px;
    margin: 0;
    text-align: center;
}

.main {
    width: fit-content;
    margin: auto;
}

.pics {
    width: 24vw;
    height: 18vw;
    border: 1px solid black;
    border-radius: 10px;
    display: block;
    margin: 10px auto;
}

