<?php

	class Views
	{

		private static $title;

		public static function SetTitle()
		{
			$args = func_get_args();
			if(count($args) != 0)
				self::$title = $args[0];
			else
				self::$title = '';
		}

		public static function Render($dir, $view)
		{
			require_once('../app/views/shared/header.php');
			require_once('../app/views/shared/navbar.php');
			require_once('../app/views/' . $dir . '/' . $view . '.php');
			require_once('../app/views/shared/footer.php');
		}

	}

?>