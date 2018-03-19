<?php

	class Database
	{

		public function __construct() {	}

		public static function startConnection()
		{
			$data = array(
				'host' => 'localhost',
				'dbname' => 'tienda',
				'user' => 'root',
				'password' => '' 
			);
			$pdo = new PDO('mysql:host=' . $data['host'] . ';dbname=' . $data['dbname'], $data['user'], $data['password']);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}

	}

?>