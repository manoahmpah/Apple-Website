var navbar = document.getElementById("navbar");
var menu = document.getElementById("menu");

window.onscroll = function () {
    if (window.pageYOffset >= menu.offsetTop + 10) {
        navbar.classList.add("Sticky");
    }
    else {
        navbar.classList.remove("Sticky");
    }
}