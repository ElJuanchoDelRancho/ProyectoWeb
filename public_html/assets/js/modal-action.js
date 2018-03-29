var modal = document.getElementById('myModal');
var modalC = document.getElementsByClassName("modal-content")[0];
var span = document.getElementsByClassName("close")[0];

if (action == true) {
	modal.style.animationName = "fadeIn";
	modalC.style.animationName = "slideIn";
    modal.style.display = "block";
    action = false;
}

span.onclick = function() {
	modal.style.animationName = "fadeOut";
	modalC.style.animationName = "slideOut";
	setTimeout(function(){ modal.style.display = "none"; }, 390);
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.animationName = "fadeOut";
		modalC.style.animationName = "slideOut";
		setTimeout(function(){ modal.style.display = "none"; }, 390);
    }
}