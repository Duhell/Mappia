document.addEventListener("DOMContentLoaded", function () {
    let navbar = document.getElementById("navbar");
    let navbartext = document.getElementById('navbartext');

    window.addEventListener("scroll", function () {
        if (window.scrollY > 30) {
            navbar.classList.add("bg-white");
            navbar.classList.add("shadow");
            navbartext.classList.remove("text-white");
            navbar.classList.remove("bg-transparent");
        } else {
            navbar.classList.add("bg-transparent");
            navbartext.classList.add("text-white");
            navbar.classList.remove("shadow");
            navbar.classList.remove("bg-white");
        }
    });
});
