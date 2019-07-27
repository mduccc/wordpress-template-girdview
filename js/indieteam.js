var slideIndex = 0;
var clicked = false;
var timeOut = null;

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
    clicked = true;
    if (timeOut != null) {
        clearTimeout(timeOut);
    }
    timeOut = setTimeout(() => {
        clicked = false;
        showSlidesAuto();
    }, 5000);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
    clicked = true;
    if (timeOut != null) {
        clearTimeout(timeOut);
    }
    timeOut = setTimeout(() => {
        clicked = false;
        showSlidesAuto();
    }, 5000);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

function showSlidesAuto() {
    if (!clicked) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        timeOut = setTimeout(showSlidesAuto, 5000); // Change image every 5 seconds
    } else {
        return false
    }
}
