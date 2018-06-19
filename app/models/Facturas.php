<?php

	class Facturas
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

	    public function createFacturas($id_usuario, $total, $fechaPedido, $fechaEntrega, $estado)
		{
			try
			{
				$this->setNames();
				$columnas = 'id_usuario, total, fechaPedido, fechaEntrega, estado';
	    		$consulta = "INSERT INTO facturas (" . $columnas . ") VALUES (?, ?, ?, ?, ?)";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($id_usuario, $total, $fechaPedido, $fechaEntrega, $estado));
				if($query_exec)
					return $this->connection->lastInsertId();
				else
					return false;
			}
			catch(Exception $e)
			{
				die("Hubo un error de base de datos: " . $e->getMessage());
			}
		}

		public function readFacturas()
		{
			try
			{
				$this->setNames();
				$consulta = "SELECT * FROM facturas";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute();
				return $query_exec->fetchAll();
			}
			catch(Exception $e)
			{
				die("Hubo un error de base de datos: " . $e->getMessage());
			}
		}

		public function updateFacturas($id, $id_usuario, $total, $fechaPedido, $fechaEntrega, $estado)
		{
			try
	    	{
	    		$this->setNames();
	    		$consulta = "UPDATE facturas SET 
	    						id_usuario = ?, total = ?, 
	    						fechaPedido = ?, fechaEntrega = ?, 
	    						estado = ?
    						 WHERE id = ?";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($id_usuario, $total, $fechaPedido, $fechaEntrega, $estado, $id));
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

		public function deleteFacturas($id)
		{
			try
	    	{
	    		$this->setNames();
	    		$consulta = "DELETE FROM facturas WHERE id = ?";
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

		public function getFacturas($id)
		{
			try
			{
				$this->setNames();
				$consulta = "SELECT * FROM facturas WHERE id = ? LIMIT 1";
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
