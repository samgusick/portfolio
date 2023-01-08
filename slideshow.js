// Initialize variables
var slideIndex = 1;
var slides = document.getElementsByClassName("slideshow-slide");
var dots = document.getElementsByClassName("slideshow-dot");

// Set the interval to call the plusSlides function every 5 seconds
setInterval(function() {
    plusSlides(1);
  }, 5000);

// Show the first slide and dot
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

// Show the current slide and update the active dot
function showSlides(n) {
  // Ensure that the slide index is within bounds
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  // Hide all slides and dots
  for (var i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
  }
  for (var i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  // Show the current slide and update the active dot
  slides[slideIndex - 1].classList.add("active");
  dots[slideIndex - 1].className += " active";
}
