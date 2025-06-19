const menu = document.querySelector(".navlinks").children;

for (let i = 0; i < menu.length; i++) {
    menu[i].addEventListener("click", function(event) {
        console.log(event.target.innerText);
    });
}




const bigText = document.getElementById("animated-text");

bigText.addEventListener("mouseover", function(event) {
    bigText.style.fontSize = "50px";
});

bigText.addEventListener("mouseout", function(event) {
    bigText.style.fontSize= "2rem";
});