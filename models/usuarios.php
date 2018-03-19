<?php

	require_once('../config/database.php');

	class Usuarios
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

	    public function createUsuarios($nombres, $apellidos, $email, $tarjeta, $id_cuenta)
		{
			try
			{
				$this->setNames();
				$columnas = 'nombres, apellidos, email, tarjeta, id_cuenta';
	    		$consulta = "INSERT INTO usuarios (" . $columnas . ") VALUES (?, ?, ?, ?, ?)";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($nombres, $apellidos, $email, $tarjeta, $id_cuenta));
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

		public function readUsuarios()
		{
			try
			{
				$this->setNames();
				$consulta = "SELECT * FROM usuarios";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute();
				return $query_exec->fetchAll();
			}
			catch(Exception $e)
			{
				die("Hubo un error de base de datos: " . $e->getMessage());
			}
		}

		public function updateUsuarios($id, $nombres, $apellidos, $email, $tarjeta, $id_cuenta)
		{
			try
	    	{
	    		$this->setNames();
	    		$consulta = "UPDATE usuarios SET 
	    						nombres = ?, apellidos = ?, email = ?, tarjeta = ?, id_cuenta = ?
    						 WHERE id = ?";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($nombres, $apellidos, $email, $tarjeta, $id_cuenta, $id));
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

		public function deleteUsuarios($id)
		{
			try
	    	{
	    		$this->setNames();
	    		$consulta = "DELETE FROM usuarios WHERE id = ?";
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

		public function getUsuarios($id)
		{
			try
			{
				$this->setNames();
				$consulta = "SELECT * FROM usuarios WHERE id = ?";
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