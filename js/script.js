burger = document.querySelector(".burger");
navbar = document.querySelector(".navbar");
navList = document.querySelector(".nav-list");

burger.addEventListener("click", ()=>{
    navbar.classList.toggle("h-nav")
    navList.classList.toggle("v")
})