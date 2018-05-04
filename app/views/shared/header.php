<!DOCTYPE html>
<html>
<head>
	<?php 
if (isset($_POST['en'])) {
    echo "<p hidden id='1'>en</p>";
    $cookie_name = "IDIOMA";
	$cookie_value = "en";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 3), "/"); // 86400 = 1 day
}
if (isset($_POST['es'])) {
    echo "<p hidden id='1'>es</p>";
    $cookie_name = "IDIOMA";
	$cookie_value = "es";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 3), "/"); // 86400 = 1 day
}
 ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="assets/img/icon.png"/>
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<title onload="googleTranslateElementInit()"><?php if(!empty(self::$title)) echo self::$title . ' | '; ?>StrongSports</title>
</head>
<body>
	<?php include './home/cookie.php';?>
	<div id="google_translate_element"></div>
<p id=""></p>
	<script type="text/javascript">
		function googleTranslateElementInit() {
	var	variable= document.getElementById("1").value;
		  new google.translate.TranslateElement({
		  	pageLanguage: variable, 
		  	includedLanguages: 'en,es'}, 
		  	'google_translate_element');
		}
	</script>
	
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>

