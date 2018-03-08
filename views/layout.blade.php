<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/_carruselstyle.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="shortcut icon" type="image/png" href="{{ asset('img/icon.png') }}"/>
	<script src="{{ asset('js/carrusel.js') }}"></script>
	<title>StrongSports</title>
</head>
<body>

	@include('navbar')

	@yield('content')

	@include('footer')

</body>
</html>