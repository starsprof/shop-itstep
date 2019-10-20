let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let i;
    let slides = document.querySelectorAll(".slider .slider-image img");
    console.log(slides);
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].classList.remove("showed");
    }
    slides[slideIndex-1].classList.add("showed");
}

let btn_prev = document.querySelector(".slider .slider-button .prev");
let btn_next = document.querySelector(".slider .slider-button .next");

btn_prev.onclick = function() {
    plusSlides(-1);
};
btn_next.onclick = function() {
    plusSlides(1);
};