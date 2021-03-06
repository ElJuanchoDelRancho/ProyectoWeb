<?php

	class Views
	{

		private static $title;

		public static $data = array();

		public static function setTitle()
		{
			$args = func_get_args();
			if(count($args) != 0)
				self::$title = $args[0];
			else
				self::$title = '';
		}

		public static function setData($name, $value)
		{
			self::$data[$name] = $value;
		}

		public static function Render($dir, $view)
		{
			extract(self::$data, EXTR_SKIP);
			require_once('../app/views/shared/header.php');
			require_once('../app/views/shared/navbar.php');
			require_once('../app/views/' . $dir . '/' . $view . '.php');
			require_once('../app/views/shared/footer.php');
		}

	}

?>