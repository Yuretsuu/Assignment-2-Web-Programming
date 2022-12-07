function menuOnClick() {
    // Toggle "change" class
    document.getElementById("menu-bar").classList.toggle("change");
    document.getElementById("nav").classList.toggle("change");
    document.getElementById("menu-bg").classList.toggle("change-bg");
}
// const navBar = document.querySelector(".nav");
// let scrollY = window.scrollY;

// window.addEventListener("scroll", () => {
//     if (scrollY <= window.scrollY) {
//         navBar.classList.remove("nav-disappear");
//     } else {
//         navBar.classList.add("nav-disappear");
//     }

//     scrollY = window.scrollY;
// });