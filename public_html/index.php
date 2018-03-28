<?php
	
	foreach (glob("../app/core/*.php") as $file) {
		require_once($file);
	}

	$controller = 'Home';

	if(!isset($_REQUEST['c']))
	{
		$controller = ucwords($controller) . 'Controller';
	    require_once('../app/controllers/' . $controller . '.php');
	    $myController = new $controller;
	    $myController->Index();
	}
	else
	{
		$controller = ucwords($_REQUEST['c']) . 'Controller';
		$accion = isset($_REQUEST['a']) ? ucwords($_REQUEST['a']) : 'Index';
		require_once('../app/controllers/' . $controller . '.php');
	    $myController = new $controller;
	    call_user_func(array($controller, $accion));
	}

?>