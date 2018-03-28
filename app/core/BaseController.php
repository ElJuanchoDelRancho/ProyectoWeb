<?php

	require_once('../app/config/database.php');
	
	foreach (glob("../app/models/*.php") as $file) {
		require_once($file);
	}

	class BaseController
	{

		public function __construct() { }

		public static function Redirect($controller, $action)
		{
			header('Location: ./?c=' . $controller . '&a=' . $action);
		}

	}

?>