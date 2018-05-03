var slideIndex = 1;
setTimeout(function(){ showSlides(1); }, 200);
setInterval(plusSlides, 5500, slideIndex);

function plusSlides(n) {
	showSlides(slideIndex += n);
}

function currentSlide(n) {
	showSlides(slideIndex = n);
}

function showSlides(n) {
	
	var slides = document.getElementsByClassName("mySlides");
	slideIndex = n;
	if (n > slides.length)
		slideIndex = 1;
	if (n < 1)
		slideIndex = slides.length;
	for (var i = 0; i < slides.length; i++)
		slides[i].style.display = "none";
	for(var i = 0; i < slides.length; i++) {
		if(i == slideIndex-1)
	  		slides[i].style.display = "block";
	}	

}