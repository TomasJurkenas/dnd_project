// $("#chooseHero").typer({
//     encouragement:["Choose your hero",
//         "Choose your warrior",
//         "Pick up your weapon",
//         "can you just choose?",
//         "Okay this is annoying just choose!"],
//
//
// });


let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let info = document.getElementsByClassName("infoBoard");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex-1].style.display = "grid";
    info[slideIndex-1].className += " active";
}