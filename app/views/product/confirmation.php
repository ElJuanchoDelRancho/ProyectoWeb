<?php
	date_default_timezone_set('America/Mexico_City');
	$fecha = date("d-m-Y");
	$fechaA = $fecha;
	$arr = explode("-", $fechaA);
	$jd = GregorianToJD($arr[1], $arr[0], $arr[2]);
	$dia = JDDayOfWeek($jd, 0);
	//echo $dia;

	$x = 1;
	while($x < 4) {

		$fecha = strtotime("+1 day", strtotime($fecha));
		$fecha = date("d-m-Y", $fecha);
		$arr = explode("-", $fecha);

		$jd = GregorianToJD($arr[1], $arr[0], $arr[2]);
		$dia = JDDayOfWeek($jd, 0);
		//echo $dia;
		if($dia != 0 && $dia != 6) {
			$x++;
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="container font">
		<h1>La fecha en que se realizó el envío fue el: <?php echo $fechaA; ?></h1>
		<h1>El día de entrega está programado para el: <?php echo $fecha; ?></h1>
	</div>

</body>
</html>