* {
    box-sizing: border-box;
}


body {
    width: 100vw;
    height: 100vh;
    margin: auto;
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

    display: none;
}

nav {
    display: flex;
    justify-content: space-evenly;
    margin: auto;

    background-color: rgb(225,81,11);

    font-weight: bold;

    padding: 5px;

    width: 860px;


}

nav a {
    color: white;
}

.chef {
    width: 800px;
    margin: auto;
    display: flex;
    justify-content: center;


    /*
    position: relative;
    width: 800px;
    margin: auto;
    float: right;
    */
}
.holder {
    width: 860px;
    height: 485px;
    margin: auto;
    background-color: rgb(225,81,11);
    border: 7px solid rgb(225,81,11);
}
.left {
    position: relative;
    display: flex;
    justify-content: center;
    top: -480px;

    font-family: "Brush Script MT", cursive;
    font-weight: bold;
    font-size: 40px;
   
}


/* RECIPES */

.main {

    width: 90vw;
    margin: 2vw;
}

.recipeCard {

    display: block;
    float: left;

    margin: 2vw; 
    width: 400px;
    height: 500px;
    border: 2px solid black;
    font-weight: bold;
    padding: 2vw 2vw 0 2vw;
    
    box-shadow: 0 4px 8px 0 grey;
    
    transition: 0.2s;
    
    overflow: auto;
    
    
}



.recipeCard:hover {
  box-shadow: 0 0 16px 5px grey;
  width: 410px;
  height: 510px;
  
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
    width: 280px;
    height: 240px;

    display: block;
    margin: 10px auto;
}

