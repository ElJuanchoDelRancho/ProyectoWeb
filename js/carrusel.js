
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length+1) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (var i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  if (slideIndex > slides.length) {slideIndex = 1}
  for(var i = 0; i < slides.length; i++) {
    if(i == slideIndex-1)
      slides[i].style.display = "block"; 
  }
  setTimeout(showSlides, 200, slideIndex+1);
}
