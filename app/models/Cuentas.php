<?php

	class Cuentas
	{

		private $connection;

		public $error = array();

		public $id;
		public $nombreUsuario;
		public $contrasena;
		public $tipoCuenta;

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

	    public function createCuentas()
	    {
	    	try
	    	{
	    		$this->setNames();
	    		$listaCuentas = $this->readCuentas();
	    		foreach ($listaCuentas as $value)
	    		{
	    			if($value['nombreUsuario'] == $this->nombreUsuario)
	    			{
	    				$this->error[] = 'Este nombre de usuario ya existe';
	    				return 0;
	    			}
	    		}
	    		$columnas = 'nombreUsuario, contrasena, tipoCuenta';
	    		$consulta = "INSERT INTO cuentas (" . $columnas . ") VALUES (?, ?, ?)";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($this->nombreUsuario, $this->contrasena, $this->tipoCuenta));
				return $this->connection->lastInsertId();
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

		public function updateCuentas()
		{
			try
	    	{
	    		$this->setNames();
	    		$consulta = "UPDATE cuentas SET nombreUsuario = ?, contrasena = ? WHERE id = ?";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($this->nombreUsuario, $this->contrasena, $this->id));
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

		public function deleteCuentas()
		{
			try
	    	{
	    		$this->setNames();
	    		$consulta = "DELETE FROM cuentas WHERE id = ?";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($this->id));
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

		public function getCuentas()
		{
			try
			{
				$this->setNames();
				$consulta = "SELECT * FROM cuentas WHERE id = ?";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($this->id));
				return $query_exec->fetch(PDO::FETCH_ASSOC);
			}
			catch(Exception $e)
			{
				die("Hubo un error de base de datos: " . $e->getMessage());
			}
		}

	}

?>