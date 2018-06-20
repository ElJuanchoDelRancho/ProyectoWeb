<?php
	
	class Direcciones
	{

		private $connection;

		public $id;
		public $calle;
		public $num_int;
		public $num_ext;
		public $colonia;
		public $municipio;
		public $estado;
		public $codigo_postal;
		public $id_usuario;

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

	    public function createDirecciones()
		{
			try
			{
				$this->setNames();
				$columnas = 'calle, num_int, num_ext, colonia, municipio, estado, codigo_postal, id_usuario';
	    		$consulta = "INSERT INTO direcciones (" . $columnas . ") VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($this->calle, $this->num_int, $this->num_ext, $this->colonia, $this->municipio, $this->estado, $this->codigo_postal, $this->id_usuario));
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

		public function readDirecciones()
		{
			try
			{
				$this->setNames();
				$consulta = "SELECT * FROM direcciones";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute();
				return $query_exec->fetchAll();
			}
			catch(Exception $e)
			{
				die("Hubo un error de base de datos: " . $e->getMessage());
			}
		}

		public function updateDirecciones()
		{
			try
	    	{
	    		$this->setNames();
	    		$consulta = "UPDATE direcciones SET 
	    						calle = ?, num_int = ?, num_ext = ?, colonia = ?, 
	    						municipio = ?, estado = ?, codigo_postal = ?, id_usuario = ?
    						 WHERE id = ?";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($this->calle, $this->num_int, $this->num_ext, $this->colonia, $this->municipio, $this->estado, $this->codigo_postal, $this->id_usuario, $this->id));
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

		public function deleteDirecciones()
		{
			try
	    	{
	    		$this->setNames();
	    		$consulta = "DELETE FROM direcciones WHERE id = ?";
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

		public function getDirecciones()
		{
			try
			{
				$this->setNames();
				$consulta = "SELECT * FROM direcciones WHERE id = ? LIMIT 1";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($this->id));
				return $query_exec->fetch(PDO::FETCH_ASSOC);
			}
			catch(Exception $e)
			{
				die("Hubo un error de base de datos: " . $e->getMessage());
			}
		}

		public function getDireccionesIdUsuario($id_usuario)
		{
			try
			{
				$this->setNames();
				$consulta = "SELECT * FROM direcciones WHERE id_usuario = ? LIMIT 1";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($id_usuario));
				return $query_exec->fetch(PDO::FETCH_ASSOC);
			}
			catch(Exception $e)
			{
				die("Hubo un error de base de datos: " . $e->getMessage());
			}
		}

	}


?>