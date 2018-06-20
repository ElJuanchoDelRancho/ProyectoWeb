<?php

	class Ventas
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

	    public function createVentas($id_producto, $cantidad, $subtotal, $id_factura)
		{
			try
			{
				$this->setNames();
				$columnas = 'id_producto, cantidad, subtotal, id_factura';
	    		$consulta = "INSERT INTO ventas (" . $columnas . ") VALUES (?, ?, ?, ?)";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($id_producto, $cantidad, $subtotal, $id_factura));
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

		public function readVentas()
		{
			try
			{
				$this->setNames();
				$consulta = "SELECT * FROM ventas";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute();
				return $query_exec->fetchAll();
			}
			catch(Exception $e)
			{
				die("Hubo un error de base de datos: " . $e->getMessage());
			}
		}

		public function getVentasFactura($id_factura)
		{
			try
			{
				$this->setNames();
				$consulta = "SELECT * FROM ventas WHERE id_factura = ?";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($id_factura));
				return $query_exec->fetchAll();
			}
			catch(Exception $e)
			{
				die("Hubo un error de base de datos: " . $e->getMessage());
			}
		}

		public function updateVentas($id_producto, $cantidad, $subtotal, $id_factura, $id)
		{
			try
	    	{
	    		$this->setNames();
	    		$consulta = "UPDATE ventas SET 
	    						id_producto = ?, cantidad = ?, 
	    						subtotal = ?, id_factura = ?
    						 WHERE id = ?";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($id_producto, $cantidad, $subtotal, $id_factura, $id));
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

		public function deleteVentas($id)
		{
			try
	    	{
	    		$this->setNames();
	    		$consulta = "DELETE FROM ventas WHERE id = ?";
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

		public function getVentas($id)
		{
			try
			{
				$this->setNames();
				$consulta = "SELECT * FROM ventas WHERE id = ? LIMIT 1";
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
