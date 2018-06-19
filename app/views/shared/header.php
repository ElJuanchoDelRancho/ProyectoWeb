<?php
	if(!isset($_COOKIE["IDIOMA"])) {
    	echo "<script>window.location = './?c=home&a=idiom'</script>";
    } else {
    	$idioma = $_COOKIE["IDIOMA"];
    }
?>

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
	<script type="text/javascript" src="assets/js/products.js"></script>
	<title><?php if(!empty(self::$title)) echo self::$title . ' | '; ?>StrongSports</title>
</head>
<body>

	<div id="google_translate_element" class="idioma" style="display: none !important"></div>

	<script type="text/javascript">
		function googleTranslateElementInit() {
			var idiom = "<?php echo $idioma; ?>";
			if (idiom == "en") {
				new google.translate.TranslateElement({
			  	pageLanguage: 'es', 
			  	includedLanguages: 'en,es'}, 
			  	'google_translate_element');
			}
		}
	</script>

</body>
</html>
