<?php

	class Descuentos
	{

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

	    public function createDescuentos($porcentaje, $cantidad)
		{
			try
			{
				$this->setNames();
				$columnas = 'porcentaje, cantidad';
	    		$consulta = "INSERT INTO descuentos (" . $columnas . ") VALUES (?, ?)";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($porcentaje, $cantidad));
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

		public function readDescuentos()
		{
			try
			{
				$this->setNames();
				$consulta = "SELECT * FROM descuentos";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute();
				return $query_exec->fetchAll();
			}
			catch(Exception $e)
			{
				die("Hubo un error de base de datos: " . $e->getMessage());
			}
		}

		public function updateDescuentos($porcentaje, $cantidad, $id)
		{
			try
	    	{
	    		$this->setNames();
	    		$consulta = "UPDATE descuentos SET 
	    						porcentaje = ?, cantidad = ?
    						 WHERE id = ?";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($porcentaje, $cantidad, $id));
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

		public function deleteDescuentos($id)
		{
			try
	    	{
	    		$this->setNames();
	    		$consulta = "DELETE FROM descuentos WHERE id = ?";
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

		public function getDescuentos($id)
		{
			try
			{
				$this->setNames();
				$consulta = "SELECT * FROM descuentos WHERE id = ? LIMIT 1";
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
