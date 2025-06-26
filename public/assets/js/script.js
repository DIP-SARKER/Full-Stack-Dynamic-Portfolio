const menu = document.querySelector(".navlinks").children;

for (let i = 0; i < menu.length; i++) {
    menu[i].addEventListener("click", function(event) {
        console.log(event.target.innerText);
    });
}
window.addEventListener('scroll', function() {
    console.log('User is scrolling!');
  });
  