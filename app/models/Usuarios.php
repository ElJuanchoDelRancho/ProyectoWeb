<?php

	class Usuarios
	{

		private $connection;

		public $id;
		public $nombres;
		public $apellidos;
		public $email;
		public $tarjeta;
		public $id_cuenta;

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

	    public function createUsuarios()
		{
			try
			{
				$this->setNames();
				$columnas = 'nombres, apellidos, email, tarjeta, id_cuenta';
	    		$consulta = "INSERT INTO usuarios (" . $columnas . ") VALUES (?, ?, ?, ?, ?)";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($this->nombres, $this->apellidos, $this->email, $this->tarjeta, $this->id_cuenta));
				return $this->connection->lastInsertId();
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

		public function updateUsuarios()
		{
			try
	    	{
	    		$this->setNames();
	    		$consulta = "UPDATE usuarios SET 
	    						nombres = ?, apellidos = ?, email = ?, tarjeta = ?, id_cuenta = ?
    						 WHERE id = ?";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($this->nombres, $this->apellidos, $this->email, $this->tarjeta, $this->id_cuenta, $this->id));
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

		public function deleteUsuarios()
		{
			try
	    	{
	    		$this->setNames();
	    		$consulta = "DELETE FROM usuarios WHERE id = ?";
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

		public function getUsuarios()
		{
			try
			{
				$this->setNames();
				$consulta = "SELECT * FROM usuarios WHERE id = ? LIMIT 1";
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