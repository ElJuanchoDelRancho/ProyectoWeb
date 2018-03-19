<?php

	require_once('../config/database.php');

	class Cuentas
	{

		private $connection;

		public function __construct()
		{
			try
			{
				$this->connection = Database::startConnection();
			}
			catch(Exception $e)
			{
				die("Hubo un error de base de datos: " . $e->getMessage());
			}
		}

		private function setNames() {
	        return $this->connection->query("SET NAMES 'utf8'");
	    }

	    public function createCuentas($nombreUsuario, $contrasena, $tipoCuenta)
	    {
	    	try
	    	{
	    		$this->setNames();
	    		$columnas = 'nombreUsuario, contrasena, tipoCuenta';
	    		$consulta = "INSERT INTO cuentas (" . $columnas . ") VALUES (?, ?, ?)";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($nombreUsuario, $contrasena, $tipoCuenta));
				if($query_exec)
					return true;
				else
					return false;
	    	}
	    	catch(Exception $e)
	    	{
	    		die("Hubo un error de base de datos: " . $e->getMessage());
	    	}
	    }

		public function readCuentas()
		{
			try
			{
				$this->setNames();
				$consulta = "SELECT * FROM cuentas";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute();
				return $query_exec->fetchAll();
			}
			catch(Exception $e)
			{
				die("Hubo un error de base de datos: " . $e->getMessage());
			}
		}

		public function updateCuentas($id, $nombreUsuario, $contrasena)
		{
			try
	    	{
	    		$this->setNames();
	    		$consulta = "UPDATE cuentas SET nombreUsuario = ?, contrasena = ? WHERE id = ?";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($nombreUsuario, $contrasena, $id));
				if($query_exec)
					return true;
				else
					return false;
	    	}
	    	catch(Exception $e)
	    	{
	    		die("Hubo un error de base de datos: " . $e->getMessage());
	    	}
		}

		public function deleteCuentas($id)
		{
			try
	    	{
	    		$this->setNames();
	    		$consulta = "DELETE FROM cuentas WHERE id = ?";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($id));
				if($query_exec)
					return true;
				else
					return false;
	    	}
	    	catch(Exception $e)
	    	{
	    		die("Hubo un error de base de datos: " . $e->getMessage());
	    	}
		}

		public function getCuentas($id)
		{
			try
			{
				$this->setNames();
				$consulta = "SELECT * FROM cuentas WHERE id = ?";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($id));
				return $query_exec->fetch(PDO::FETCH_ASSOC);
			}
			catch(Exception $e)
			{
				die("Hubo un error de base de datos: " . $e->getMessage());
			}
		}

	}

?>