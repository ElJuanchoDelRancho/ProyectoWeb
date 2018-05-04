<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="assets/img/icon.png"/>
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/f.js"></script>
	<title><?php if(!empty(self::$title)) echo self::$title . ' | '; ?>StrongSports</title>
</head>
<body onload="googleTranslateElementInit();">

	<?php
		if(!isset($_COOKIE["IDIOMA"])) {
	    	header("Location: ?c=home&a=idiom");
			die();
		} else {
			$idioma = $_COOKIE["IDIOMA"];
		}
	?>

	<script type="text/javascript">
		function googleTranslateElementInit() {
			<?php
			if ($idioma == "en") {
			?>
				new google.translate.TranslateElement({
			  	pageLanguage: 'es', 
			  	includedLanguages: 'en,es'}, 
			  	'google_translate_element');
			<?php
			}
			?>
			
		}
	</script>

</body>
</html>

