let slideIndex = 0;

window.onload = function() {

    showSlides();
}

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("slideshow");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slideIndex = (slideIndex+1) % slides.length;

    slides[slideIndex].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}