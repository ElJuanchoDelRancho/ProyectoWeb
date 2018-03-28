<?php

	class AccountController extends BaseController
	{

		public function __construct() { }

		public function Login()
		{
			$session = new Login();
			if ($session->thereIsSession() == true)
				self::Redirect('home', 'index');
			Views::SetTitle('Inicia Sesión');
			Views::Render('account', 'login');
		}

		public function Register()
		{
			$session = new Login();
			if($session->thereIsSession() == true)
				self::Redirect('home', 'index');
			Views::SetTitle('Regístrate');
			Views::Render('account', 'register');
		}

		public function RegisterNext()
		{
			$session = new Login();

			if($session->thereIsSession() == true && !isset($_POST['siguiente']) && !isset($_POST['crear']))
			{
				self::Redirect('home', 'index');
			}
			else if (isset($_POST['siguiente']))
			{
				$nuevaCuenta = new Cuentas();
				$nuevaCuenta->nombreUsuario = $_POST['usuario'];
				$nuevaCuenta->contrasena = $_POST['contrasena'];
				$nuevaCuenta->tipoCuenta = 'cliente';
				$idCuenta = $nuevaCuenta->createCuentas();
				if($idCuenta != 0)
				{
					$nuevoUsuario = new Usuarios();
					$nuevoUsuario->nombres = $_POST['nombre'];
					$nuevoUsuario->apellidos = $_POST['apellidop'] . ' ' . $_POST['apellidom'];
					$nuevoUsuario->email = $_POST['email'];
					$nuevoUsuario->tarjeta = $_POST['tarjeta'];
					$nuevoUsuario->id_cuenta = $idCuenta;
					$idUsuario = $nuevoUsuario->createUsuarios();
					$_SESSION['nombre_usuario'] = $nuevaCuenta->nombreUsuario;
				}
			}
			else if(isset($_POST['crear']))
			{
				$nuevaCuenta = new Cuentas();
				$listaCuentas = $nuevaCuenta->readCuentas();
				$nombreUsuario = $_SESSION['nombre_usuario'];
				$idCuenta = 0;
				foreach ($listaCuentas as $cuenta) {
					if ($cuenta['nombreUsuario'] == $nombreUsuario)
						$idCuenta = $cuenta['id'];
				}

				$nuevoUsuario = new Usuarios();
				$listaUsuarios = $nuevoUsuario->readUsuarios();
				$idUsuario = 0;
				foreach ($listaUsuarios as $usuario) {
					if ($usuario['id_cuenta'] == $idCuenta)
						$idUsuario = $usuario['id'];
				}
				
				$nuevaDireccion = new Direcciones();
				$nuevaDireccion->calle = $_POST['calle'];
				$nuevaDireccion->num_int = $_POST['numI'];
				$nuevaDireccion->num_ext = $_POST['numE'];
				$nuevaDireccion->colonia = $_POST['colonia'];
				$nuevaDireccion->municipio = $_POST['ciudad'];
				$nuevaDireccion->estado = $_POST['estado'];
				$nuevaDireccion->codigo_postal = $_POST['cp'];
				$nuevaDireccion->id_usuario = $idUsuario;
				$nuevaDireccion->createDirecciones();

				self::Redirect('home', 'index');
			}
			
			Views::SetTitle('Regístrate');
			Views::Render('account', 'register-next');
		}

	}

?>