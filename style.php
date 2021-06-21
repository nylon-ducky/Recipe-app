* {
    box-sizing: border-box;
}

body {
    width: 100vw;
    height: 100vh;
    margin: 0;
    padding: 0;
}

#bm {
    display: none;
}

.noshow {
    display: none;
}

#searchGroup {
    height: 40px;
    display: inline-block;
    margin: auto;
}

nav {
    display: flex;
    justify-content: space-evenly;
}

.recipeCard {
    margin: 4vw; 
    width: 40vw;
    border: 2px solid black;
    padding: 2vw;
    float: left;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.2s;
}

.recipeCard:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.titles {
    font-size: 30px;
    margin: 0;
}

.main {
    width: fit-content;
    margin: auto;
}