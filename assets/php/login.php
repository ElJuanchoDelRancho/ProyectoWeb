<?php
	require_once('../config/database.php');

	class Login
	{
		private $connection;
		public $error = array();

		public function __construct()
		{
			try
			{
				$this->connection = Database::startConnection();
				if(!isset($_SESSION))
				{
					session_start();
				}
				if (isset($_GET['logout']))
				{
					$this->closeSession();
				}
				else if (isset($_POST['ingresar']))
				{
					$this->startSession();
				}
			}
			catch(Exception $e)
			{
				die("Hubo un error de base de datos: " . $e->getMessage());
			}
		}

		private function setNames() {
	        return $this->connection->query("SET NAMES 'utf8'");
	    }

	    private function startSession()
	    {
	    	try
			{
				$nombreUsuario = 'juan'; //$_POST['usuario'];
				$contrasena = 'juan'; //$_POST['contrasena'];
				$this->setNames();
				$consulta = "SELECT * FROM cuentas WHERE nombreUsuario = ? AND contrasena = ?";
				$query_exec = $this->connection->prepare($consulta);
				$query_exec->execute(array($nombreUsuario, $contrasena));
				$numeroFilas = $query_exec->fetch(PDO::FETCH_ASSOC);
				/*foreach ($numeroFilas as $value) {
					echo $value;
				}*/
				if(count($numeroFilas) == 1)
				{
					$usuario = $nombreUsuario;
					$_SESSION['nombre_usuario'] = $usuario;
				}
				else 
				{
					$this->error[] = 'Usuario y/o contraseña no válidos';
				}
			}
			catch(Exception $e)
			{
				die("Hubo un error de base de datos: " . $e->getMessage());
			}
	    }

	    public function thereIsSession()
	    {
			if (isset($_SESSION['nombre_usuario'])) 
				return true;
			else 
				return false;
	    }

	    public function closeSession () 
	    {
	    	session_destroy();
	    }

	}

?>