@extends('layout')

@section('content')

	<div class="slideshow-container">
		<div class="mySlides fade">
    		<img src="https://images.pexels.com/photos/883313/pexels-photo-883313.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" style="width:100%">
    		<div class="text">Caption One</div>
  		</div>

  		<div class="mySlides fade">
    		<img src="https://images.pexels.com/photos/747909/pexels-photo-747909.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" style="width:100%">
    		<div class="text">Caption Two</div>
  		</div>

  		<div class="mySlides fade">
    		<img src="https://images.pexels.com/photos/883313/pexels-photo-883313.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" style="width:100%">
    		<div class="text">Caption Three</div>
  		</div>

  		<!-- Next and previous buttons -->
  		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>

	</div>

@endsection